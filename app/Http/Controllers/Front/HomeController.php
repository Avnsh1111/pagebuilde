<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @param Request $request
     */
    public function index(Request $request) {

        return view('front.home');

    }
}
