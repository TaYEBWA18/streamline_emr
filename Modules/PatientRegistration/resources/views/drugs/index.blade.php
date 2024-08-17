@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DRUG TABLE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('drugs.create')}}"> Add Drug</a>
                <a class="btn btn-success" href="">Deleted Drugs</a>
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
            <th>Drug ID</th>
            <th>Name</th>
            <th>Brand Name</th>
            <th>Form</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($drugs as $drug)
        <!-- @php 
        
        @endphp -->
        <tr>
            <td>{{"DR-"}}{{$drug->id}}</td>
            <td>{{ $drug->name}}</td> <!--concacting name -->
            <td>{{ $drug->brand_name}}</td>
            <td>{{ $drug->form}}</td>

           
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
  
    {!! $drugs->links() !!}
      
@endsection