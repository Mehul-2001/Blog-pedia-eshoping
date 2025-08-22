@extends('admin.layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> it is change like down side -->
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if($status=="Approve")
                <li class="breadcrumb-item">Profile Status : <font color="blue">{{$status}}</font></li>
              @else
                <li class="breadcrumb-item">Profile Status : <font color="red">{{$status}}</font></li>
              @endif()
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          @foreach($blogger as $bloggers)
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center imagex">
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{asset('/blogger/image/profile_picture/' .$bloggers->profile_picture) }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$bloggers->name}}</h3>

                <p class="text-muted text-center">Blogger</p>

                <!-- <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul> -->

            
            
                <a type="button" href="{{route('approve',$bloggers->id)}}" class="btn btn-success justify-content-center">Approve</a>
            
            

              <a type="button" href="{{route('disapprove',$bloggers->id)}}" class="btn btn-danger justify-content-center">Dis-Approve</a>

            

               
                 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          @endforeach

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Description</strong>

                <p class="text-muted">
                {{$bloggers->description}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted">{{$bloggers->address}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Contact </strong>

                <p class="text-muted"><a href="tel:{{$bloggers->phone}}">
                +91 {{$bloggers->phone}}</a>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Email </strong>

                <p class="text-muted"><a href = "mailto: {{$bloggers->email}}">{{$bloggers->email}}</a></p>

                <hr>

                <strong><i class="nav-icon fas fa fa-file-invoice"></i> Aadhar </strong>

              <br/>
              <br/>
                <p class="text-muted"><img class="profile-user-img img-fluid" src="{{asset('/blogger/image/aadhar/' .$bloggers->aadhar) }}" />
                  <a href="{{asset('/blogger/image/aadhar/' .$bloggers->aadhar) }}"> <i class="fas fa fa-solid fa-download"></i></a>
                </p>
                
                

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         <!-- start      ----------- here --------- data ----table------ -->
         <!-- /.card-header -->
        <div class="col-md-9">
          <div class="card ">
            @foreach($bussiness_details as $bussiness_detailss)
            
              <div class="container mt-12 mb-12 p-3 d-flex justify-content-center"> 
                <div class="cardx p-4"> 
                  <div class=" imagex d-flex flex-column justify-content-center align-items-center"> 
                    <button class="btn btn-secondary"> <img src="{{asset('/bussiness/image/' .$bussiness_detailss->bussiness_image) }}" height="100" width="100" /></button> 
                      <span class="namex mt-3">{{$bussiness_detailss->bussiness_name}}</span> <span class="iddx">{{$bussiness_detailss->bussiness_phone}}</span> 
                        <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1x">{{$bussiness_detailss->bussiness_email}}</span> 
                          <span><i href = "mailto: {{$bussiness_detailss->bussiness_email}}" class="fa fa-envelope"></i></span> </div> <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="namex">{{$bussiness_detailss->bussiness_city}}<span class="followx">({{$bussiness_detailss->bussiness_state}})</span></span> </div> <div class=" d-flex mt-2"> 
                            <button class="btn1x btn-dark">More Details</button> </div> 
                              <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> 
                                <span><i href="{{$bussiness_detailss->twiter}}" class="fa fa-twitter"></i></span>
                                <span><i href="{{$bussiness_detailss->facebook}}" class="fa fa-facebook"></i></span>
                                <span><i href="{{$bussiness_detailss->instagram}}" class="fa fa-instagram"></i></span>
                                <span><i href="{{$bussiness_detailss->youtube}}" class="fa fa-youtube"></i></span> </div>
            
                  </div>
                 </div>
              </div>
            @endforeach()           
          </div>
            
            
              

                    <!-- /.card-body -->
                  <!-- middle          ----------- of ----------- data ---- table ----- -->
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
                        
                          <td><a href="{{route('view_gadget_detail_admin',['id'=>$post_detailss->id])}}" class="btn btn-success"><i class="fa fa-eye"></i></a>

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
    
                      </tr>
          </tfoot>
</table>
</div>
<!-- </div> -->

         <!-- end------------------------ of ----------- data -------table--- -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <style>
    .cardx {
    width: 350px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}

.imagex img {
    transition: all 0.5s
}

.cardx:hover .imagex img {
    transform: scale(1.5)
}

.btnx {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.namex {
    font-size: 22px;
    font-weight: bold
}

.iddx {
    font-size: 14px;
    font-weight: 600
}

.idd1x {
    font-size: 12px
}

.numberx {
    font-size: 22px;
    font-weight: bold
}

.followx {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1x {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}

.textx span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.iconsx i {
    font-size: 19px
}

hr .new1x {
    border: 1px solid
}

.joinx {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.datex {
    background-color: #ccc
}
  </style>
  
@endsection()