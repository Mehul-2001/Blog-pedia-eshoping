@extends('blogger.layouts.app')
@section('content')

<!-- /.card-header -->
<div class="card">
         
         <table id="example1" class="table table-bordered table-striped">
         <thead>
     <tr>

           <th>Name</th>
           <th>Topic</th>
           <th>Youtube link</th>
           <th>Facebook link</th>
           <th>Instagram link</th>
           <th>Twitter link</th>
         
           <th>view Gadget</th>
           <th>delete Post</th>
           

     </tr>
</thead>
       <tbody>
         @foreach($post_details as $post_detailss)
           <tr>
         
               <td>{{$post_detailss->post_name}}</td>
               <td>{{$post_detailss->post_topic}}</td>
               <td>{{$post_detailss->youtube}}</td>
               <td>{{$post_detailss->facebook}}</td>
               <td>{{$post_detailss->instagram}}</td>
               <td>{{$post_detailss->twiter}}</td>
             
               <td><a href="{{route('view_gadget_detail_blogger',['id'=>$post_detailss->id])}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
               <td><a href="{{route('deletepost',['id'=>$post_detailss->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>

           </tr>
         @endforeach()
       </tbody>
<tfoot>
           <tr>

             <th>Name</th>
             <th>Topic</th>
             <th>Youtube link</th>
             <th>Facebook link</th>
             <th>Instagram link</th>
             <th>Twitter link</th>
             <th>view Gadget</th>
             <th>delete Post</th>

           </tr>
</tfoot>
</table>
</div>

              
@endsection()