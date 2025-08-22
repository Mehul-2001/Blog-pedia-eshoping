@extends('admin.layouts.app')
@section('content')
<!-- form start -->
@if($errors->any())
    @include('errors.error')
  @endif
@foreach($category as $categorys)
<form action="{{route('editcategory',['id'=>$categorys->id])}}" method="post">
{{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" class="form-control" name="name" value="{{ $categorys->name }}" placeholder="Enter name">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="update" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endforeach()
              <!-- form end -->
@endsection