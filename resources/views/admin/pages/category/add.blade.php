@extends('admin.layouts.app')
@section('content')
<!-- form start -->
@if($errors->any())
    @include('admin.errors.error')
  @endif
<form method="post" action="{{route('addcategory')}}">
    {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add Category name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Category">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- form end -->
@endsection