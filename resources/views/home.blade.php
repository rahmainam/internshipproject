@extends('layouts.admin')  
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
          <div class="container-fluid">
            <div class="col-6">
          <h4 class="m-0">Trending Items</h1>
            <table class="table table-bordered table-hover" style="background-color:#ffff">
              <thead class="thead-dark">
              <tr>
                <th>Name</th>
                <th>Detail</th>
                <th>Category</th>
            </tr>
              </thead>
              @foreach($items as $i)
                @if($i->isTrending == true)
                  <tr>
                    <td>{{$i->name}}</td>
                    <td>{{$i->detail}}</td>
                    <td>{{$i->Category->name}}</td>
                  </tr>
                @endif
              @endforeach
          </table>
          </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid --> 
      <div class="container-fluid">
        <h4 class="m-0">Contact Forms</h1>
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
    </section>
   

  <!-- /.content-wrapper -->
@endsection