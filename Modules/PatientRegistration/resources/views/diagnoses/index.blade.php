@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DIAGNOSES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('diagnoses.create')}}"> Add Diagnosis</a>
                <a class="btn btn-success" href="">Deleted Diagnoses</a>
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
            <th>Diagnosis ID</th>
            <th>Name</th>
            <th>ICD Number</th>
         
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($diagnoses as $diagnosis)
        <!-- @php 
        
        @endphp -->
        <tr>
            <td>{{"D-"}}{{$diagnosis->id}}</td>
            <td>{{ $diagnosis->name}}</td> <!--concacting name -->
            <td>{{ $diagnosis->icd_code}}</td>
           

           
            <td>
                <form action="" method="POST">
   
                    <a class="btn btn-info" href="">Select</a>
    
                    <a class="btn btn-primary" href="">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $diagnoses->links() !!}
      
@endsection