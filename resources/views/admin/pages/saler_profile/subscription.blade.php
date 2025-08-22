@extends('admin.layouts.app')
@section('content')

<!-- /.card-header -->
<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Subscription Email</th>
                   <th>send specific mail to user</th>
                    <th>Delete</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($subscription as $subscriptions)
                        <tr>
                          <td>{{$subscriptions->email}}</td>
                         
                          <td><a href="mailto: {{$subscriptions->email}}" class="btn btn-simple"><i class="fa fa-envelope"></i></a></td>
                          <td><a href="{{route('deletesubscription',['id'=>$subscriptions->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                          

                        </tr>
                        @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  
                    <th>Name</th>
                    <th>send specific mail to user</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

             
              <!-- /.card-body -->




               
             

              
@endsection()