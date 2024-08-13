<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EMR System')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5; /* Light background color for the entire page */
        }
        .sidebar {
            min-height: 100vh;
            width: 250px;
            background-color: #535863; /* Light background color for the sidebar */
            border-right: 1px solid #ddd; /* Light border to separate the sidebar from the content */
        }
        .sidebar .nav-link {
            color: #fefcfc;
        }
        .sidebar .nav-link.active {
            background-color: #2e89e4;
            border-radius: 4px;
        }
        .content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff; /* Ensure content area is also light to match the sidebar */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Stre@mline</a>
        </div>
       

        <div class="nav flex-column">
        <a class="nav-link {{ request()->routeIs('patients.*') ? 'active' : '' }}" href="{{ route('patients.index') }}">
        <i class="fas fa-users"></i>
            Patients</a>
            {{-- <a class="nav-link {{ request()->routeIs('medical_records.*') ? 'active' : '' }}" href="#">Medical Records</a> --}}
            <a class="nav-link {{ request()->routeIs('lab_tests.*') ? 'active' : '' }}" href="#">Lab</a>
            <a class="nav-link {{ request()->routeIs('pharmacy.*') ? 'active' : '' }}" href="#">Pharmacy</a>
            <a class="nav-link {{ request()->routeIs('clinics.*') ? 'active' : '' }}" href="#">Clinics</a>
            <a class="nav-link {{ request()->routeIs('diagnoses.*') ? 'active' : '' }}" href="#">Diagnoses</a>
        </div>
        
    <div class="logout">
        <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" style="background: none; border: none; color: white; cursor: pointer;">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <!-- <div class="logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" style="background: none; border: none; color: white; cursor: pointer;">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
