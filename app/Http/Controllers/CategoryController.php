<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view("admin.category.add_all_category");
    }


    public function store(Request $request)
    {
        $data = array();

        $data['name'] = $request->name;
        $data['des'] = $request->des;

        DB::table('categorys')->insert($data);
        return redirect()->back(); 
    }


    public function show()
    {
        $show = DB::table('categorys')->get();
        return view("admin.category.add_all_category")->with('show',$show);
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
        DB::table('categorys')->where('id',$id)->delete();
        return redirect()->back(); 

    }
}
