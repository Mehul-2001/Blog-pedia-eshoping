@extends('admin.layouts.app')
@section('content')

<!-- /.card-header -->
<div class="card-body">

<br/>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Blogger Name</th>
                    <th>Blogger Email</th>
                    <th>Blogger Contact</th>
                    <th>Blogger Status</th>
                    <th>View Profile</th>
                    <th>Orders</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($blogger_details as $blogger_detailss)
                        <tr>
                          <td>{{$blogger_detailss->name}}</td>
                          <td>{{$blogger_detailss->email}}</td>
                          <td>{{$blogger_detailss->phone}}</td>
                          <td>{{$blogger_detailss->status}}</td>
                         
                         
                          <td><a href="{{route('view_blogger_profile',['id'=>$blogger_detailss->id])}}" class="btn btn-success"><i class="fa fa-eye"></i></a></td>
                          <td><a href="{{route('view_order_detail_admin',['id'=>$blogger_detailss->id])}}" class="btn btn-success"><i class="fa fa-file-invoice"></i></a></td>
                          

                        </tr>
                        @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  
                    <th>Blogger Name</th>
                    <th>Blogger Email</th>
                    <th>Blogger Contact</th>
                    <th>Blogger Status</th>
                    <th>View Profile</th>
                    <th>Orders</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->




               
             

              
@endsection()