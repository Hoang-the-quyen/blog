<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class ParatialsController extends Controller
{
    public function show_news(){
        $show_news = DB::table('news')->orderBy('id','desc')->take(3)->get();

        $show_news_blog = DB::table('news')->orderBy('id','desc')->skip(3)->take(10)->get();

        $show_cate = DB::table('categorys')->get();

        return view('pages.paratials.home')->with('show_news',$show_news)->with('show_news_blog',$show_news_blog)
        ->with('show_cate',$show_cate);
    }

    
}
