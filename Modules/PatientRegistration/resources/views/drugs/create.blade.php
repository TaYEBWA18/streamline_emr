@extends('layouts.app')  



@section('content') 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Drug</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> Back</a>
            <a class="btn btn-primary" href=""> View Patients</a>
        </div>
    </div>            
</div>
  
   
<form action="{{route('drugs.store')}}" method="POST"> 
<!-- csrf prevents input injection from the browswe-->
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
      
            <div class="form-group">
                <strong>Drug Name:</strong> 
                <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Paracetamol" value="{{ old('name') }}">
                @error('name') <div class="alert alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
            </div>
            <div class="form-group">
                <strong>Brand Name:</strong>
                <input  type="text" name="brand_name" class="form-control @error('brand_name') is-invalid @enderror" placeholder="Name" value="{{ old('brand_name') }}">
                @error('brand_name') <div class="alert alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
            </div>
            <div class="form-goup">
            <strong>Drug Form:</strong>
                <select name="form" id="form" class="form-control @error('form') is-invalid @enderror" placeholder="Capsules" >
                     <option value="">Select Form</option>
                     <option value="1"@selected(old('form')=='1')>Tablets</option>  <!--Only for dropdown lists-->
                     <option value="2" @if(old('form')=='2') selected @endif>Capsules</option>
                     <option value="3" @if(old('form')=='3') selected @endif>Syrup</option>
                     <option value="4" @if(old('form')=='4') selected @endif>Injection(Ampule)</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection
     