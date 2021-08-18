@extends('layouts.admin')  
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Categories</h1>
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
            <div class="col-md-6">
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>
                  </div><!-- /.card-header -->
                  <form method="post" action="/admin/categories/edit">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{$categories['name']}}" class="form-control" placeholder="Category Name" required>
                      </div>
                      <div class="form-group">
                        <label>Detail</label>
                        <input type="text" name="detail"  value="{{$categories['detail']}}" class="form-control"  placeholder="Category Detail">
                      </div>
                    </div> 
              <div class="card-footer">
                <button type="submit" class="btn btn-dark">Submit</button>
              </div><!-- /.card-footer -->
            </div><!-- /.card-card -->
            </form>
                    
        </div><!-- /.col-md-9-->
    </div><!-- /.container fluid-->
    </div><!-- /.content-->
  </section>

@endsection