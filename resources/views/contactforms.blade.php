@extends('layouts.admin')  
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Contact Form</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
            <li class="breadcrumb-item active">All Contact Forms</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<div class="container-fluid">
          <table class="table table-bordered table-hover" style="background-color:#ffff">
           <thead class="thead-dark">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Company</th>
              <th>Product</th>
              <th>Website</th>
              <th>City</th>
              <th>Country</th>
              <th>Subject</th>
              <th>Message</th>
            </tr>
            
            @foreach($contactforms as $c)
           <tr>
             <td>{{$c->name}}</td>
             <td>{{$c->email}}</td>
             <td>{{$c->phone}}</td>
             <td>{{$c->company}}</td>
             <td>{{$c->product}}</td>
             <td>{{$c->website}}</td>
             <td>{{$c->city}}</td>
             <td>{{$c->country}}</td>
             <td>{{$c->subject}}</td>
             <td>{{$c->message}}</td>
           </tr>
          @endforeach
           </thead>
         </table> 
        </div>    
@endsection