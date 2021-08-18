<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $arr['categories']= categories::all();
        return view('admin.categories.index')->with($arr);
    }

    public function crudCategories()
    {
        $arr['categories']= categories::all();
        return view('categoriescrud')->with($arr);
    }

    public function create()
    {
        return view('categoriescrud');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories= new categories;
        $categories->name=$request->name;
        $categories->detail=$request->detail;
        $categories->save();
        return redirect('admin/categories');

       // return categories::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return categories::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $categories = categories::find($request->id);
        //$categories->update($request->all());
        //return $categories;
        $categories->name=$request->name;
        $categories->detail=$request->detail;
        $categories->save();
        return redirect('admin/categories');
    }
    public function edit($id){
        $categories=categories::find($id);
        return view('categoriesedit',['categories'=>$categories]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        
        $categories = categories::find($id);
        $categories->delete();
        return redirect('admin/categories'); 
    }
}
