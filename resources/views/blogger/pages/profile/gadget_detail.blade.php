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
              <form class="card" action="{{route('gadget_detail',['post_id'=>$post_id,'blogger_id'=>$blogger_id])}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="card-header">
                  <h3 class="card-title">Add Gadget's Detail</h3>
                </div>
                <div class="card-body">
                   
                  <!-- name -->
                  <div class="mb-3">
                    <label class="form-label required">Gadget Name</label>
                    <div>
                      <input type="text"  name="gadget_name" class="form-control"  placeholder="Enter Your Product name">
                    </div>
                  </div>

                   <!-- Price -->
                   <div class="mb-3">
                    <label class="form-label required">Price</label>
                    <div>
                      <input type="text"  name="gadget_price" class="form-control"  placeholder="Enter Your Product Topic">
                    </div>
                  </div>

                

                  <!-- Description -->
                  <div class="mb-3">
                    <label class="form-label required">Add Description of Your Gadget</label>
                    <div>
                      <textarea type="text"  name="gadget_description" class="form-control"  placeholder="Enter Description"></textarea>
                      
                    </div>
                  </div>

                  

                  <!-- image -->
                  <div class="mb-3">
                    <label class="form-label required">Add your Gadget Image</label>
                    <div class="custom-file">
                        <input class="form-control" type="file" class="custom-file-input" name="gadget_image">
                      </div>
                  </div> 

                  <!-- 0ver -->
                  
                  
                  <!-- <div class="mb-3">
                    <div>
                      <label class="form-check required">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">I Accept All the T&C.</span>
                      </label> -->
                      
                      <div class="card-footer text-end" >
                  <button type="submit" class="btn btn-primary">Add another gadget</button>
                  <a href="{{route('blogger',['id'=>$blogger_id])}}" class="btn btn-warning" >Finish !</a>
                </div>

                    </div>
                  </div>
                </div>
               
              
              </form>
              
              

            </div>

          
@endsection()