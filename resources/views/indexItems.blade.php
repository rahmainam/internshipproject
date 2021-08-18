@extends('layouts.admin')  
@section('content')
    <!-- Content Header (Page header) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Items</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                <li class="breadcrumb-item active">Item</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
<!-- /.main-content -->

<section class="content">
    <div class="col-9">
        <p>
            <a href="/admin/items/crud" class="btn btn-success"> Add new Item</a>
        </p>
        <table class="table table-bordered table-hover" style="background-color:#ffff">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Detail</th>
                </tr>
                @foreach($items as $c)
                <tr>
                  <td>{{$c->name}}</td>
                  <td>{{$c->detail}}</td>
              </tr>
                @endforeach
            </thead>
            </table>
        </div>

    </div>
  </section>
@endsection