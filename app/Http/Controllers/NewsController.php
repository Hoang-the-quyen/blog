<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class NewsController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        return view("admin.news.add_all_news");
    }


    public function store(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['des'] = $request->des;
        $get_image = $request->file('image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_name_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            // upload vào folder
            $get_image->move('uploads/',$get_name_image);
            $data['image'] = $get_name_image;

            DB::table('news')->insert($data);
            return Redirect()->back();
        }
        $data['image'] ='';
        DB::table('news')->insert($data);
        return Redirect()->back();

    }


    public function show()
    {
        $show = DB::table('news')->get();
        return view("admin.news.add_all_news")->with('show',$show);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        DB::table('news')->where('id',$id)->delete();
        return redirect()->back(); 
    }
}
