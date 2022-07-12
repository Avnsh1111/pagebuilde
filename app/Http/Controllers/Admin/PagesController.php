<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\PageViews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index() {
        $pages = Pages::with(['createdBy','updatedBy'])->get();
        return view('admin.pages.index',compact('pages'));
    }

    public function add() {
        return view('admin.pages.add');
    }

    public function savePage(Request $request) {

        $request->validate([
            'name' => 'required',
            'pagedata' => 'required',
            'featured_image' => 'required'
        ]);

        $page = new Pages();
        $page->name = $request->name;

        if($request->hasFile('featured_image')) {
            $fileName = time().'.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('uploads'), $fileName);
            $page->featured_image = $fileName;
        }

        $page->slug = str_slug( $request->name , "-");
        $page->background_color = $request->color;
        $page->content = $request->pagedata;
        $page->is_main_page = $request->has('is_home_page') ? 1 : 0;
        $page->created_by = Auth::guard('admin')->user()->id;
        $page->save();

        if($page->is_main_page == 1) {
            Pages::where('id','!=',$page->id)->update([
                'is_main_page' => 0
            ]);
        }


        return redirect()->route('admin.pages')->with('success','Page added successfully.');

    }

    public function editPage($id) {

        $page = Pages::find($id);

        if($page) {
            return view('admin.pages.edit',compact('page'));
        } else {
            abort('404');
        }
    }

    public function update($id,Request $request) {
        $page = Pages::find($id);

        if($page) {

            if($request->hasFile('featured_image')) {
                $fileName = time().'.'.$request->featured_image->extension();
                $request->featured_image->move(public_path('uploads'), $fileName);
                $page->featured_image = $fileName;
            }
            $page->name = $request->name;
            $page->slug = str_slug( $request->name , "-");
            $page->background_color = $request->color;
            $page->content = $request->pagedata;
            $page->is_main_page = $request->has('is_home_page') ? 1 : 0;
            $page->updated_by = Auth::guard('admin')->user()->id;
            $page->save();

            if($page->is_main_page == 1) {
                Pages::where('id','!=',$page->id)->update([
                    'is_main_page' => 0
                ]);
            }

            return redirect()->route('admin.pages')->with('success','Page updated successfully.');

        } else {
            abort('404');
        }
    }

    public function delete($id) {
        $page = Pages::find($id);

        if($page) {
            $page->delete();
            return redirect()->route('admin.pages')->with('success','Page deleted successfully.');
        }
    }

    public function pageView() {
        $pageView = PageViews::with(['user','page'])->orderBy('id','desc')->get();

        return view('admin.pages.views',compact('pageView'));
    }
}
