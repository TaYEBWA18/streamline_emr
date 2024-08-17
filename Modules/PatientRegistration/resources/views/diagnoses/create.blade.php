@extends('layouts.app')  



@section('content') 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Diagnosis</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> Back</a>
            <a class="btn btn-primary" href=""> View Diagnoses</a>
        </div>
    </div>            
</div>
  
   
<form action="{{route('diagnoses.store')}}" method="POST"> 
<!-- csrf prevents input injection from the browswe-->
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
      
            <div class="form-group">
                <strong>Diagnosis Name:</strong> 
                <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="" value="{{ old('name') }}">
                @error('name') <div class="alert alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
            </div>
            <div class="form-group">
                <strong>ICD Code:</strong>
                <input  type="text" name="icd_code" class="form-control @error('icd_code') is-invalid @enderror" placeholder="" value="{{ old('icd_code') }}">
                @error('icd_code') <div class="alert alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection
     