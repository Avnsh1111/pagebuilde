<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\VerifyUser;
use App\Models\User;
use App\Models\Userotp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Twilio\Rest\Client;

class AuthController extends Controller
{
    public function index(Request $request) {

        if(Auth::guard('web')->check()) {
            return redirect()->route('front.home');
        }
        return view('front.auth.login');
    }

    public function loginWithGoogle(Request $request) {
        return Socialite::driver('google')->setScopes(['openid', 'email','profile'])->redirect();
    }

    public function callbackGoogle(Request $request) {

        try {
            $user = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            dd($e);
        }



        $userDB = User::where('email',$user->email)->where('login_type',1)->first();

        if($userDB) {
            $userDB->name = $user->name;
            $userDB->profile_image = $user->avatar_original;
            $userDB->login_data = json_encode($user);

            $userDB->save();
        } else {
            $userDB = new User();
            $userDB->name = $user->name;
            $userDB->email = $user->email;
            $userDB->profile_image = $user->avatar_original;
            $userDB->login_data = json_encode($user);
            $userDB->login_type = 1;
            $userDB->email_verified_at = Carbon::now();
            $userDB->save();
        }

        Auth::guard('web')->login($userDB);

        return redirect()->route('front.home');

    }

    public function logout(Request $request) {
        if(!Auth::guard('web')->check()) {
            return redirect()->route('front.home');
        }

        Session::flush();

        Auth::guard('web')->logout();

        return redirect()->route('front.login');


    }

    public function signup(Request $request) {
        return view('front.auth.signup');
    }

    public function signupSubmit(Request $request) {

        $validated = $request->validate([
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'country' => 'required',
            'mobile_no' => 'required|max:14',
            'terms_policy' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->login_data = json_encode(['country' => $request->country]);
        $user->save();

        Auth::guard('web')->login($user);

        $linkString = $request->email."*****AAAAA*****".Carbon::now()->format('Y-m-d H:i:s');

        $link = encrypt($linkString);

        $link = env('APP_URL').'/verify-email/'.$link;

        Mail::to($request->email)->send(new VerifyUser($request->name,$link));

        return redirect()->route('front.signup')->with('success','Please verify your email.');

    }

    public function verifyEmail($hash,Request $request) {

        $hashData = decrypt($hash);

        $hashData = explode('*****AAAAA*****',$hashData);
        $email = $hashData[0];
        $time = $hashData[1];

        $diff = Carbon::parse($time)->diffInMinutes(Carbon::now());

        if($diff > 10) {
            User::where('email',$email)->delete();
            return redirect()->route('front.signup')->with('error','Link is expired! Please sign up again.');
        }

        $user = User::where('email',$email)->first();

        if($user) {
            $user->email_verified_at = Carbon::now();
            $user->save();
            return redirect()->route('front.login')->with('success','Email verified successfully.');
        } else {
            return redirect()->route('front.signup')->with('error','Link is expired! Please sign up again.');
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginCheck(Request $request) {
        $validated = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required',
        ]);

        $user = User::where('email',$request->email)->whereNotNull('email_verified_at')->first();

        if(!$user){
            return redirect()->route('front.login')->with('error','Email is not verified.');
        }

        $remember_me = $request->has('remember_me') ? true : false;

        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials,$remember_me)) {
            // Authentication passed...
            return redirect()->route('front.home');
        } else {
            return redirect()->route('front.login')->with('error','Login data is invalid.');
        }


    }

    public function loginOtp() {
        if(Auth::guard('web')->check()) {
            return redirect()->route('front.home');
        }
        return view('front.auth.loginOtp');
    }

    public function sendOtp(Request $request) {



        try {

            $receiverNumber = $request->mobile_no;

            $user = User::where('mobile_no',$receiverNumber)->first();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'code' => 404
                ]);
            }

            $otp = rand(100000,999999);
            $message = "This login OTP is : ".$otp;

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            Userotp::where('user_id',$user->id)->delete();

            $userOtp = new Userotp();
            $userOtp->user_id = $user->id;
            $userOtp->otp = $otp;
            $userOtp->save();

            return response()->json([
                'status' => true,
                'code' => 200
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'code' => 500
            ]);
        }
    }

    public function checkOtp(Request $request) {
        //dd($request->all());
        $user = User::where('mobile_no',$request->mobile_no)->first();

        if(!$user) {
            return redirect()->route('front.login.otp')->with('error','Please sign up.');
        }

        $userOtp = Userotp::where('user_id',$user->id)->where('otp',$request->otp)->first();

        if (!$userOtp) {
            return redirect()->route('front.login.otp')->with('error','Otp is invalid.');
        }

        Userotp::where('user_id',$user->id)->delete();

        Auth::guard('web')->login($user);

        return redirect()->route('front.home');

    }

}
