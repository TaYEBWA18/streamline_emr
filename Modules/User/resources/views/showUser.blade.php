@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{$users->role=='2'? 'Doctor':
                ($users->role=='3'? 'Lab Supervisor':
                ($users->role=='4'? 'Lab Assistant':
                ($users->role=='5'? 'Pharmacist': 
                ($users->role=='6'? 'Son':'Receptionist' )
                )))}}:   {{$users->name}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('user.index')}}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee ID:</strong>
                {{'SLH-EM'}}-0{{ $users->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone number:</strong>
                {{ $users->phone }}
            </div>
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $users->gender=='1'? 'Male': 'Female' }}
            </div>
            <div class="form-group">
                <strong>Last Updated:</strong>
                {{ $users->updated_at }}
            </div>
            <div class="form-group">
                <!-- <strong>Registered at:</strong> -->
                
            </div>
    
        </div>
    </div>
@endsection