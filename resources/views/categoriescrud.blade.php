@extends('layouts.admin')  
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Add Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <section class="content">
        <div class="container-fluid">
            <div class="row mb-4">
              <div class="col-sm-6">
                <table class="table table-bordered table-hover" style="background-color:#ffff">
                 <thead class="thead-dark">
                  <tr>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Action</th>
                  </tr>
                  @foreach($categories as $c)
                 <tr>
                   <td>{{$c->name}}</td>
                   <td>{{$c->detail}}</td>
                   <td style="width:70px"><p><a href="edit/{{$c->id}}" class="fas fa-edit" style="font-size:18px;color:blue;"> </a> <a href="delete/{{$c->id}}" class="fa fa-trash" style="font-size:20px;color:red"></a></p></td>
                </tr>
                  @endforeach
                 </thead>
               </table> 
            </div><!-- /.col-sm-4 -->
                <div class="col-md-6">
                    <div class="card card-dark">
                      <div class="card-header">
                        <h3 class="card-title">Add Category</h3>
                      </div><!-- /.card-header -->
                      <form method="post" action="{{route('categories.store')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="card-body">
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name"  class="form-control" placeholder="Category Name" required>
                          </div>
                          <div class="form-group">
                            <label>Detail</label>
                            <input type="text" name="detail"  class="form-control"  placeholder="Category Detail">
                          </div>
                        </div> 
                  <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </div><!-- /.card-footer -->
                </div><!-- /.card-card -->
                </form>
                        
            </div><!-- /.col-md-9-->
            </div><!-- /.row-->
        </div><!-- /.container fluid-->
        </div><!-- /.content-->
      </section>
@endsection