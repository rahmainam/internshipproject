@extends('layouts.admin')  
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Contact Forms</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                <li class="breadcrumb-item active">Items</li>
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
                <h3 class="card-title">Add Item</h3>
              </div><!-- /.card-header -->
              <form method="POST" action="{{route('contactform.store')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" id="validationDefault02" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" name="phone" class="form-control" id="validationDefault03" placeholder="Phone" required>
                  </div>
                  <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="company" class="form-control" id="validationDefault04"  placeholder="Company" required>
                  </div>
                  <div class="form-group">
                    <label>Product</label>
                    <input type="text" name="product" class="form-control" id="validationDefault05"  placeholder="Product" required>
                  </div>
                  <div class="form-group">
                    <label>Website</label>
                    <input type="text" name="website" class="form-control" id="validationDefault06" placeholder="Website" required>
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" id="validationDefault07" placeholder="City" required>
                  </div>
                  <div class="form-group">
                    <label>Country</label>
                    <input type="text" name="country" class="form-control" id="validationDefault08" placeholder="Country" required>
                  </div>
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control"id="validationDefault09"  placeholder="Subject" required>
                  </div>
                  <div class="form-group">
                    <label>Message</label>
                    <input type="text" name="message" class="form-control" id="validationDefault10"  placeholder="Message" required>
                  </div>
                </div> 
          <div class="card-footer">
            <button type="submit" class="btn btn-dark">Submit</button>
          </div><!-- /.card-footer -->
        </div><!-- /.card-card -->
        </form>
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
                    <th>Action</th>
                  </tr>
                 <tr>
                  @foreach($contactforms as $c)
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
                   <td style="width:70px"><p><a href="edit/{{$c->id}}" class="fas fa-edit" style="font-size:18px;color:blue;"> </a> <a href="delete/{{$c->id}}" class="fa fa-trash" style="font-size:20px;color:red"></a></p></td>
                </tr>
                  @endforeach
                 </thead>
               </table> 

                        
        </div><!-- /.container fluid-->
        </div><!-- /.content-->
      </section>
@endsection