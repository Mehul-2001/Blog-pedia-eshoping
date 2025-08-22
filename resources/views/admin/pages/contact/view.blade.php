@extends('admin.layouts.app')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
<!-- /.card-header -->
<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Messages</th>
                    <th>Name</th>
                    <th>contact(s)</th>
                    <th>Subject</th>
                    <th>Delete</th>
                   
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($contact as $contacts)
                        <tr>
                          <td>{{$contacts->message}}</td>
                          <td>{{$contacts->name}}</td>
                          <td>{{$contacts->contact}}</td>
                          <td>{{$contacts->subject}}</td>
                          
    
                          <td><a href="{{route('deletecontact',['id'=>$contacts->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

                        </tr>
                        @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Messages</th>
                    <th>Name</th>
                    <th>contact(s)</th>
                    <th>Subject</th>
                    <th>Delete</th>
                  
                  </tr>
                  </tfoot>
                </table>
                
              </div>
              <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

             
             
@endsection()