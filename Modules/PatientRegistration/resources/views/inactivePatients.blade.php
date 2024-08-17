@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PATIENTS' TABLE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('patients.index')}}"> Back</a>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <!-- table to return the inserted patients' data -->
        <tr>
            <th>Patient Number</th>
            <th>Name</th>
            <th>Phone number</th>
            <th>Gender</th>
           
            
            <th>Created By</th>
            <th>Date Deleted</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($patients as $patient)
        <!-- @php 
        $patient_data = \Modules\User\App\Models\UserModel::find($patient->user_id);
        @endphp -->
        <tr>
            <td>{{"SLH-P"}}{{$patient->id}}</td>
            <td>{{ $patient->First_name}}  {{$patient->last_name}}</td> <!--concacting name -->
            <td>{{ $patient->phone_number}}</td>
            <td>{{ ($patient->gender =='M')? 'Male':'Female'}}</td>
            <td>{{ $patient->user->name}}</td>
            <td>{{ $patient->deleted_at}}</td>
             <!-- <td>{{ $patient_data->name}}</td> -->
           
            <td>
                <form action="{{ route('patient.restore', $patient->id)}}" method="POST">
   
                    <button class="btn btn-info" type="submit"><i class="fas fa-undo"></i> Restore</button>
                    <!-- the restore button -->
   
                    @csrf

                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $patients->links() !!}