<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @param Request $request
     */
    public function index(Request $request) {

        $page = Pages::where('is_main_page',1)->first();
        if ($page) {
            $content = $this->jsonToHtml($page->content);
            return view('front.home',compact('page','content'));
        } else {
            abort('404');
        }


    }

    public function page($slug) {

        $page = Pages::where('slug',$slug)->first();
        if ($page) {
            $content = $this->jsonToHtml($page->content);
            return view('front.home',compact('page','content'));
        } else {
            abort('404');
        }


    }


    private function jsonToHtml($jsonStr)
    {
        $obj = json_decode($jsonStr);

        //dd($obj);

        $html = '<p class="pt-50"></p>';
        foreach ($obj->blocks as $block) {
            switch ($block->type) {
                case 'paragraph':
                    $html .= '<p>' . $block->data->text . '</p>';
                    break;

                case 'header':
                    $html .= '<h' . $block->data->level . ' class="sub-heading">' . $block->data->text . '</h' . $block->data->level . '>';
                    break;

                case 'raw':
                    $html .= $block->data->html;
                    break;

                case 'list':
                    $lsType = ($block->data->style == 'ordered') ? 'ol' : 'ul';
                    $html .= '<' . $lsType . '>';
                    foreach ($block->data->items as $item) {
                        $html .= '<li>' . $item . '</li>';
                    }
                    $html .= '</' . $lsType . '>';
                    break;

                case 'code':
                    $html .= '<pre><code class="language-' . $block->data->lang . '">' . $block->data->code . '</code></pre>';
                    break;

                case 'image':
                    $html .= '<div class="img_pnl"><img src="' . $block->data->url . '" /></div>';
                    break;

                default:
                    break;
            }
        }

        return $html;
    }

}
