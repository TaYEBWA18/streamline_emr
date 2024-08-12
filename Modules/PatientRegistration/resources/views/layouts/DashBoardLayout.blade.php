<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Stre@mline Hospital')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }
        .navbar {
            width: 250px;
            background-color: #bfff80;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            box-sizing: border-box;
        }
        .navbar a {
            color: green;
            text-decoration: none;
            margin-top: 5px;
            margin-bottom: 5px;
            display: block;
        }
        .link_container {
            background-color: #ccff66;
            height: 40px;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 100%; /* Makes sure it matches the width of the navbar */
        }
        .link_container:hover {
            background-color: #ffff66;
        }
        .navbar .logout {
            
            margin-top: auto;
            text-align: center;

        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            box-sizing: border-box;
        }
        .heading {
            background-color: #00802b;
            color: #ffff33;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .message-board {
            background-color: #f8f9fa;
            border-radius:20px;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
    <img src="{{ asset('https://streamlinehealth.org/wp-content/uploads/2023/08/logo-02.webp') }}" alt="Stre@mline Hospital Logo"><br><br>
        <nav>
            <div class="link_container"><a href="#"><b>Patients</b></a></div>
            <div class="link_container"><a href="#"><b>Appointments</b></a></div>
            <div class="link_container"><a href="#"><b>Clinics</b></a></div>
            <div class="link_container"><a href="#"><b>Pharmacy</b></a></div>
            <div class="link_container"><a href="#"><b>Labs</b></a></div>
            <div class="link_container"><a href="#"><b>Message Board</b></a></div>

            <!-- Add more navigation links as needed -->
        </nav>
        <div class="logout">
            <b>Profile:</b>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" style="background: none; border: none; color: green; cursor: pointer;"> <b>Logout</b></button>
            </form>
        </div>
    </div>

    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
