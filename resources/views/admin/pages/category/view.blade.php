@extends('admin.layouts.app')
@section('content')

<!-- /.card-header -->
<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($category as $categorys)
                        <tr>
                          <td>{{$categorys->name}}</td>
                         
                          <td><a href="{{route('deletecategory',['id'=>$categorys->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                          <td><a href="{{route('editcategory',['id'=>$categorys->id])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>

                        </tr>
                        @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

              <a class="float-left" href="{{route('addcategory')}}" style="padding-left: 2%;"><button class="btn btn-primary"><i class="fa fa-plus"></i> Add New Category </button></a>
<br/>
              <!-- /.card-body -->




               
             

              
@endsection()