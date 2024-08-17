@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('patients.index')}}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h2>PAtient's Home</h2>
            <div class="form-group">
                <strong>PATIENT NUMBER:</strong>
                {{'SLH-P'}}-0{{ $patients->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAME:</strong>
                {{$patients->First_name}} {{ $patients->last_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone number:</strong>
                {{ $patients->phone_number }}
            </div>
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $patients->gender=='F'? 'Female': 'Male' }}
            </div>
            <div class="form-group">
                <strong>DOB:</strong>
                {{ $patients->date_of_birth }}
            </div>
           <div class="form-group">
                <strong>Next of Kin:</strong>
                {{ $patients->nok }}
            </div>
            <div class="form-group">
                <strong>Relationship:</strong>
                {{ $patients->relationship}}
            </div>
            <div class="form-group">
                <strong>Registered By:</strong>
                {{ $patients->user->name }}
            </div>
            <div class="form-group">
                <strong>Registration Date:</strong>
                {{ $patients->created_at }}
            </div>
            

    
        </div>
    </div>
@endsection