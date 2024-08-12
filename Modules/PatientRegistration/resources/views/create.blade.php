<!-- extends the patients layout file which has the styling required for the sections  -->
@extends('user::layouts.DashBoardLayout')  



@section('content') 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Patient</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> Back</a>
            <a class="btn btn-primary" href=""> View Patients</a>
        </div>
    </div>            
</div>
  
   
<form action="{{route('patientregistration.store')}}" method="POST"> 
<!-- csrf prevents input injection from the browswe-->
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong> 
                <input  type="text" name="first_name" class="form-control" placeholder="Name" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <strong>Last Name:</strong>
                <input  type="text" name="last_name" class="form-control" placeholder="Name" value="{{ old('last_name') }}">
            </div>
            <div class="form-group">
                <strong>Gender:</strong> <!-- for and id should be uniform -->
                <input  type="radio" id="male" name="gender" value="M" @if(old('gender')=='M') checked @endif>
                <label for="male">Male</label>
                <input  type="radio" id="female" name="gender" value="F" @if(old('gender')=='F') checked @endif>
                <label for="female">Female</label>
            </div>
           
            <div class="form-group">
                <strong>DATE OF BIRTH:</strong>
                <input  type="date" name="date_of_birth" class="form-control" placeholder="01/01/200" value="{{ old('date_of_birth') }}">
            </div>
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input required type="text" name="phone_number" class="form-control @error('phone_number') invalid-feedback @enderror"
                  placeholder="077777731" value="{{ old('phone_number') }}">
                  @error('phone_number') <div class="alert alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
            </div>
            
            <div class="form-group">
                <strong>Next of Kin:</strong>
                <input  type="text" name="next_of_kin" class="form-control" placeholder="NAME" value="{{ old('next_of_kin') }}">
            </div>
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input  maxlength="10" type="text" name="nok_phone_number" class="form-control" 
                placeholder="077777731" value="{{ old('nok_phone_number') }}"> 
                
            </div>
            <div class="form-group">
                <strong>Relationship:</strong>
                <select name="relationship" id="relationship" class="form-control" placeholder="" >
                     <option value="">Select Relationship</option>
                     <option value="1"@selected(old('relationship')=='1')>Mother</option>  <!--Only for dropdown lists-->
                     <option value="2" @if(old('relationship')=='2') selected @endif>Father</option>
                     <option value="3" @if(old('relationship')=='3') selected @endif>Son</option>
                     <option value="4" @if(old('relationship')=='4') selected @endif>Daughter</option>
                     <option value="5" @if(old('relationship')=='5') selected @endif>Spouse</option>
                     <option value="6" @if(old('relationship')=='6') selected @endif>Friend</option>
                     <option value="7" @if(old('relationship')=='7') selected @endif>Relative</option>
                     <option value="8" @if(old('relationship')=='8') selected @endif>Other</option>
                     <option value="9" @if(old('relationship')=='9') selected @endif>Brother</option>
                     <option value="10" @if(old('relationship')=='10') selected @endif>Sister</option>
                </select>
            </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection