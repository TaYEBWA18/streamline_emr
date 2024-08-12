
@extends('user::layouts.DashBoardLayout')

@section('title', 'Dashboard | Stre@mline Hospital')

@section('content')
    <div class="heading">
        <h1>Stre@mline Hospital</h1>
    </div>
    <div><h3>Welcome, {{ $users->name }}!</h3></div>
    <div class="message-board">
        <h2>Message Board</h2>
        <p>Welcome to the Stre@mline Hospital dashboard. Here you can find the latest updates and important messages.</p>
        <!-- Add more messages or dynamic content as needed -->
    </div>
@endsection
