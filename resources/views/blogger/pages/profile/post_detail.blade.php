@extends('blogger.layouts.app')
@section('content')
<style>

.input_select_textarea {
  border-radius: 2px;
  border: 2px solid #777;
  /* box-sizing: border-box;
  font-size: 1.25em; */
  font-family: 'Nanum Gothic';
  /* width: 100%;
  padding: 10px; 
  */
}

#edit_profile{
  margin: auto;
  width: 85%;
  /* border: 3px solid green; */
  /* padding: 10px; */
}
</style>
<br/>
<div class="col-md-12" id="edit_profile">
                @if($errors->any())
                @include('admin.errors.error')
                @endif
              <form class="card" action="{{route('post_detail',['id'=>$id])}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="card-header">
                  <h3 class="card-title">post Detail</h3>
                </div>
                <div class="card-body">
                   
                  <!-- name -->
                  <div class="mb-3">
                    <label class="form-label required">post Name</label>
                    <div>
                      <input type="text"  name="post_name" class="form-control"  placeholder="Enter Your post name">
                    </div>
                  </div>

                   <!-- Topic -->
                   <div class="mb-3">
                    <label class="form-label required">Topic</label>
                    <div>
                      <input type="text"  name="post_topic" class="form-control"  placeholder="Enter Your post Topic">
                    </div>
                  </div>

                  
                  
                   <!-- youtube -->
                   <div class="mb-3">
                    <label class="form-label required">Enter Youtube Channel Link</label>
                    <div>
                      <input type="text"  name="youtube" class="form-control" placeholder="www.youtube.com">
                    </div>
                  </div>


                   <!-- facebook -->
                   <div class="mb-3">
                    <label class="form-label required">Enter Facebook Account Link</label>
                    <div>
                      <input type="text"  name="facebook" class="form-control" placeholder="www.facebook.com">
                    </div>
                  </div>


                   <!-- instagram -->
                   <div class="mb-3">
                    <label class="form-label required">Enter Instagram Account Link</label>
                    <div>
                      <input type="text"  name="instagram" class="form-control" placeholder="www.instagram.com">
                    </div>
                  </div>


                   <!-- twitter -->
                   <div class="mb-3">
                    <label class="form-label required">Enter Twitter Account Link</label>
                    <div>
                      <input type="text"  name="twiter" class="form-control" placeholder="www.twitter.com">
                    </div>
                  </div>

                  <!-- Description -->
                  <div class="mb-3">
                    <label class="form-label required">Add Description of Your post</label>
                    <div>
                      <textarea type="text"  name="post_description" class="form-control"  placeholder="Enter Description"></textarea>
                      
                    </div>
                  </div>

                  

                  <!-- image -->
                  <div class="mb-3">
                    <label class="form-label required">post Image</label>
                    <div class="custom-file">
                        <input class="form-control" type="file" class="custom-file-input" name="post_image">
                      </div>
                  </div> 

                  <!-- 0ver -->
                  
                  
                  <!-- <div class="mb-3">
                    <div>
                      <label class="form-check required">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">I Accept All the T&C.</span>
                      </label> -->
                      <div class="card-footer text-end">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                    </div>
                  </div>
                </div>
               
              </form>
            </div>

          
@endsection()