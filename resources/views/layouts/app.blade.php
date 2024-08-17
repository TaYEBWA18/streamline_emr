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
        img {
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .sidebar {
            width: 250px;
            background-color: #535863;
            border-right: 1px solid #ddd;
            min-height: calc(100vh - 56px); /* Adjust based on the navbar height */
            position: relative;
        }
        .sidebar .nav-link {
            color: #fefcfc;
        }
        .sidebar .nav-link.active {
            background-color: #2e89e4;
            border-radius: 4px;
        }
        .sidebar .nav-link.sub-link {
            padding-left: 30px;
        }
        
        .content {
            flex: 1;
            padding: 50px;
            background-color: #ffffff; /* Ensure content area is also light to match the sidebar */
            border: 1px solid;
            border-radius: 4px;
            border-color: grey;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            margin-top: 56px; /* Adjust based on the navbar height */
            margin-bottom: 56px;
            overflow-y: auto;
            transition: margin-top 0.3s ease-in-out;

        }
        .content_buttons{
            margin-top: 20px;
            height: 40px;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            margin-left: 10px;
            margin-right: 10px;
            background-color: green;
            color: white;
            border-radius: 10px;
        }
        .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="main-container">
    <div class="sidebar">
        <div class="navbar navbar-light bg-light">
            <a> <img src="{{ asset('https://streamlinehealth.org/wp-content/uploads/2023/08/logo-02.webp') }}" alt="Stre@mline Hospital Logo"><br> </a>
        </div>
       

        <div class="nav flex-column">
                <!-- Patients Main Link with Sub-links -->
                <a class="nav-link {{ request()->routeIs('patients.*') ? 'active' : '' }}" data-toggle="collapse" href="#patientsSubmenu" role="button" aria-expanded="{{ request()->routeIs('patients.*') ? 'true' : 'false' }}" aria-controls="patientsSubmenu">
                    <i class="fas fa-user-md"></i> Patients
                </a>
                <div class="collapse {{ request()->routeIs('patients.*') ? 'show' : '' }}" id="patientsSubmenu">
                    <a class="nav-link sub-link {{ request()->routeIs('patients.index') ? 'active' : '' }}" href="{{ route('patients.index') }}"> Active Patients</a>
                    <a class="nav-link sub-link {{ request()->routeIs('patients.inactive') ? 'active' : '' }}" href="{{ route('patients.inactive') }}"> Inactive Patients</a>
                    <a class="nav-link sub-link {{ request()->routeIs('patients.create') ? 'active' : '' }}" href="{{ route('patients.create') }}"> Create Patient</a>
                </div>
           
            <!-- Labs Main Link with Sub-links -->
            <a class="nav-link {{ request()->routeIs('labtests.*') ? 'active' : '' }}" data-toggle="collapse" href="#labSubmenu" role="button" aria-expanded="{{ request()->routeIs('labtests.*') ? 'true' : 'false' }}" aria-controls="labSubmenu">
                    <i class="fas fa-flask"></i> Labs
                </a>
                <div class="collapse {{ request()->routeIs('labtests.*') ? 'show' : '' }}" id="labSubmenu">
                    <a class="nav-link sub-link {{ request()->routeIs('labtest.create') ? 'active' : '' }}" href="{{ route('labtest.create') }}"> Create Lab Test</a> 
                    <a class="nav-link sub-link {{ request()->routeIs('labtest.index') ? 'active' : '' }}" href="{{ route('labtest.create') }}"> View Lab Tests</a>
                   
                </div>
            <!-- Pharmacy Main Link with Sub-links -->
            <a class="nav-link {{ request()->routeIs('drugs.*') ? 'active' : '' }}" data-toggle="collapse" href="#pharmacySubmenu" role="button" aria-expanded="{{ request()->routeIs('drugs.*') ? 'true' : 'false' }}" aria-controls="pharmacySubmenu">
                    <i class="fas fa-capsules"></i> Pharmacy
                </a>
                <div class="collapse {{ request()->routeIs('drugs.*') ? 'show' : '' }}" id="pharmacySubmenu">
                    <a class="nav-link sub-link {{ request()->routeIs('drugs.create') ? 'active' : '' }}" href="{{ route('drugs.create') }}"> Add Drug</a>
                    <a class="nav-link sub-link {{ request()->routeIs('drugs.index') ? 'active' : '' }}" href="{{ route('drugs.index') }}"> View Drugs</a>
                    
                </div>
                <a class="nav-link {{ request()->routeIs('clinics.*') ? 'active' : '' }}" data-toggle="collapse" href="#clinicsSubmenu" role="button" aria-expanded="{{ request()->routeIs('clinics.*') ? 'true' : 'false' }}" aria-controls="clinicsSubmenu">
                    <i class="fas fa-clinic-medical"></i> Clinics
                </a>
                <div class="collapse {{ request()->routeIs('clinics.*') ? 'show' : '' }}" id="clinicsSubmenu">   
                    <a class="nav-link sub-link {{ request()->routeIs('clinics.create') ? 'active' : '' }}" href="">Add Clinic</a>
                    <a class="nav-link sub-link {{ request()->routeIs('clinics.index') ? 'active' : '' }}" href="">View Clinics</a>
                    <a class="nav-link sub-link {{ request()->routeIs('clinics.inactive') ? 'active' : '' }}" href="">Inactive Clinics</a>
                </div>
            <!-- Diagnoses Main Link with Sub-links -->
            <a class="nav-link {{ request()->routeIs('diagnoses.*') ? 'active' : '' }}" data-toggle="collapse" href="#diagnosesSubmenu" role="button" aria-expanded="{{ request()->routeIs('diagnoses.*') ? 'true' : 'false' }}" aria-controls="diagnosesSubmenu">
                    <i class="fas fa-stethoscope"></i> Diagnoses
                </a>
                <div class="collapse {{ request()->routeIs('diagnoses.*') ? 'show' : '' }}" id="diagnosesSubmenu">
                    <a class="nav-link sub-link {{ request()->routeIs('diagnoses.create') ? 'active' : '' }}" href="{{ route('diagnoses.create') }}"> Add Diagnosis</a>
                    <a class="nav-link sub-link {{ request()->routeIs('diagnoses.index') ? 'active' : '' }}" href="{{ route('diagnoses.index') }}"> View Diagnoses</a>
                    <a class="nav-link sub-link {{ request()->routeIs('diagnoses.inactive') ? 'active' : '' }}" href=""> Inactive Diagnoses</a>
                </div>
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
    </div>
    <div class="content">
        @yield('content')
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
