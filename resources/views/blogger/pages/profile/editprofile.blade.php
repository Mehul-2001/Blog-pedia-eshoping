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
<div class="col-md-9" id="edit_profile">
                @if($errors->any())
                @include('admin.errors.error')
                @endif
              <form class="card" action="{{route('editprofile',['id'=>$id])}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="card-header">
                  <h2 class="card-title">Update Profile</h2>
                </div>
                <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name</label>
                    <div>
                      <input name="name" value="{{Auth::user()->name}}" class="form-control"  readonly>
                     
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label required">Email address</label>
                    <div>
                      <input   name="email" value="{{Auth::user()->email}}" class="form-control" aria-describedby="emailHelp"  readonly>
                      <small class="form-hint">We'll never share your email with anyone else.</small>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label required">Contact</label>
                    <div>
                      <input type="number"  name="phone" class="form-control"  placeholder="Enter Contact Number">
                      <small class="form-hint">We'll never share your Contact with anyone else.</small>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label required">Address</label>
                    <div>
                      <textarea type="text"  name="address" class="form-control"  placeholder="Enter Address"></textarea>
                      
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label required">Description</label>
                    <div>
                      <textarea type="text"  name="description" class="form-control"  placeholder="Enter Description"></textarea>
                      
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label required">Profile picture</label>
                    <div class="custom-file">
                        <input class="form-control" type="file" class="custom-file-input" name="profile_picture">
                        
                      </div>
                  </div> 
                  
            

                  <div class="mb-3">
                    <label class="form-label required">Aadhar Card</label>
                    <div class="custom-file">
                        <input class="form-control" type="file" class="custom-file-input" name="aadhar">
                        
                      </div>
                  </div> 

                 
                 
                  <!-- <div class="mb-3">
                    <label class="form-label required">Password</label>
                    <div>
                      <input type="password" class="form-control" placeholder="Password">
                      <small class="form-hint">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                        spaces, special characters, or emoji.
                      </small>
                    </div>
                  </div> -->
                  <!-- <div class="mb-3">
                    <label class="form-label">Select</label>
                    <div>
                      <select class="form-select">
                        <option>Option 1</option>
                        <optgroup label="Optgroup 1">
                          <option>Option 1</option>
                          <option>Option 2</option>
                        </optgroup>
                        <option>Option 2</option>
                        <optgroup label="Optgroup 2">
                          <option>Option 1</option>
                          <option>Option 2</option>
                        </optgroup>
                        <optgroup label="Optgroup 3">
                          <option>Option 1</option>
                          <option>Option 2</option>
                        </optgroup>
                        <option>Option 3</option>
                        <option>Option 4</option>
                      </select>
                    </div>
                  </div> -->
                  <!-- <div class="mb-3">
                    <label class="form-label">Checkboxes</label>
                    <div>
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-label">Option 1</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 2</span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox" disabled>
                        <span class="form-check-label">Option 3</span>
                      </label>
                    </div>
                  </div> -->
                  <div class="card-footer text-end">
                  <button type="submit"  class="btn btn-primary">Next</button> 
                </div>
        
                </div>
                
              </form>
            </div>

      @endsection()