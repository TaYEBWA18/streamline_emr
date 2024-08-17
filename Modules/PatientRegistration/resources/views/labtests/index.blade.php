@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>LAB TESTS' TABLE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('labtest.create')}}"> ADD TEST</a>
                <a class="btn btn-success" href="">Deleted Tests</a>
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
            <th>Test Number</th>
            <th>Name</th>
            <th>Duration</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($labtests as $labtest)
        <!-- @php 
        
        @endphp -->
        <tr>
            <td>{{"LT-"}}{{$labtest->id}}</td>
            <td>{{ $labtest->name}}</td> <!--concacting name -->
            <td>{{ $labtest->duration}}</td>
           
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
  
    {!! $labtests->links() !!}
      
@endsection