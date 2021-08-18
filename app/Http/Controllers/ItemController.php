<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
use App\Models\categories;
use App\Models\contactforms;
use App\Http\Controllers\CategoriesController;

class ItemController extends Controller
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
        $categories=categories::all();
        $items = items::all();
        return view('itemcrud', compact('items','categories'));
    }

    public function index1()
    {
        $categories=categories::all();
        $items = items::all();
        return view('itemcrud', compact('items','categories'));
    }



    public function Trending()
    {
    //   $arr['items'] = items::all();
    //     foreach($items as $i){
    //         if($i->isTrending == true){
    //             echo $i->name, "\n", $i->detail, "\n", $i->Category->name, "\n\n";
    //         }
    //    }
           $contactforms=contactforms::all();
           $items=items::all();
          return view('home', compact('items', 'contactforms'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->validate([
            'name'=>'required'
        ]);
        return view('itemcrud');
    }

    public function store(Request $request)
    {
        $items= new items;
        $items->name=$request->name;
        $items->detail=$request->detail;
        $items->save();
        return redirect('admin/items');
       // items::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return items::find($id);
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
        // $items = items::find($id);
        // $items->update($request->all());
        // return $items;
        $items = items::find($request->id);
        $items->name=$request->name;
        $items->detail=$request->detail;
        $items->save();
        return redirect('admin/items');
    }
    public function edit($id){
        $items=items::find($id);
        return view('itemedit',['items'=>$items]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $items = items::find($id);
        $items->delete();
        return redirect('admin/items');
    }
}
