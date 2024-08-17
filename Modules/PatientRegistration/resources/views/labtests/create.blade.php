@extends('layouts.app')  



@section('content') 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New LabTest</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> Back</a>
            <a class="btn btn-primary" href=""> View LabTests</a>
        </div>
    </div>            
</div>
  

<form action="{{route('labtest.store')}}" method="POST"> 
<!-- csrf prevents input injection from the browswe-->
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
      
            <div class="form-group">
                <strong>Test Name:</strong> 
                <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="" value="{{ old('name')}}">
                @error('name') <div class="alert alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
            </div>
            <div class="form-group">
                <strong>Duration:</strong>
                <input  type="text" name="duration" class="form-control @error('duration') is-invalid @enderror" placeholder="" value="{{ old('duration')}}">
                @error('duration') <div class="alert alert-danger">
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
     