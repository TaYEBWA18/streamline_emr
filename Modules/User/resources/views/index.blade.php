@extends('user::layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>USERS' TABLE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('user.create')}}"> ADD USER</a>
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
            <th>UerID</th>
            <th>Name</th>
            <th>Phone number</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Role</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{"SLH-U"}}{{$user->id}}</td>
            <td>{{ $user->name}}</td> <!--concacting name -->
            <td>{{ $user->phone}}</td>
            <td>{{ ($user->gender =='M')? 'Male':'Female'}}</td>
            <td>{{ $user->email}}</td>
            <td>
    @switch($user->role)
        @case(1)
            Admin
            @break
        @case(2)
            Doctor
            @break
        @case(3)
            Lab Scientist
            @break
        @case(4)
            Lab Assistant
            @break
        @case(5)
            Pharmacist
            @break
        @case(6)
            Nurse
            @break
        @case(7)
            Receptionist
            @break
        @default
            Unknown Role
    @endswitch
</td>
           
            <td>
                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $users->links() !!}
      
@endsection