<?php

namespace App\Http\Controllers;

use App\Models\contactforms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['contactforms'] = contactforms::all();
        return view('/contactforms')->with($arr);
    }
    
    public function index1()
    {
        $arr['contactforms'] = contactforms::all();
        return view('/contactformcrud')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'company'=>'required',
            'product'=>'required',
            'website'=>'required',
            'city'=>'required',
            'country'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $contactforms= new contactforms;
        $contactforms->name=$request->name;
        $contactforms->email=$request->email;
        $contactforms->phone=$request->phone;
        $contactforms->company=$request->company;
        $contactforms->product=$request->product;
        $contactforms->website=$request->website;
        $contactforms->city=$request->city;
        $contactforms->country=$request->country;
        $contactforms->subject=$request->subject;
        $contactforms->message=$request->message;
        
        $contactforms->save();
        return redirect('admin/contactforms');
        //return contactforms::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactforms=contactforms::find($id);
        return view('contactformedit',['contactforms'=>$contactforms]);
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
        $contactforms = contactforms::find($request->id);
        // $contactforms->update($request->all());
        // return $contactforms;
        $contactforms->name=$request->name;
        $contactforms->email=$request->email;
        $contactforms->phone=$request->phone;
        $contactforms->company=$request->company;
        $contactforms->product=$request->product;
        $contactforms->website=$request->website;
        $contactforms->city=$request->city;
        $contactforms->country=$request->country;
        $contactforms->subject=$request->subject;
        $contactforms->message=$request->message;
        $contactforms->update();
        return redirect('admin/contactform');
    }

    public function edit(contactforms $contactforms){
        $arr['contactforms'] = $contactforms;
        return view('/contactformedit')->with($arr);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $contactforms = contactforms::find($id);
        $contactforms->delete();
        return redirect('admin/contactform'); 
    }
}
