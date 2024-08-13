@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PATIENTS' TABLE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('patients.create')}}"> ADD PATIENT</a>
                <a class="btn btn-success" href="{{route('patients.inactive')}}">Innactive Patients</a>
                <a class="btn btn-success" href="">Back</a>
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
            <th>Date of Birth</th>
            <th>Next Of Kin</th>
            <th>Created By</th>
            <th>Date Created</th>
           
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
            <td>{{ $patient->date_of_birth}}</td>
            <td>{{ $patient->nok}}</td>
            <td>{{ $patient->user->name}}</td>
            <td>{{ $patient->created_at}}</td>
             <!-- <td>{{ $patient_data->name}}</td> -->
           
            <td>
                <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}">Select</a>
    
                    <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $patients->links() !!}
      
@endsection