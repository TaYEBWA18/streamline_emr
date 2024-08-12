<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            position: bottom;
            bottom: 0;
            width: 100%;
            box-sizing: border-box;
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
        /* Form Styling */
        form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        form input[type="submit"],
        form button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        form input[type="submit"]:hover,
        form button:hover {
            background-color: #0056b3;
        }
        /* Hide the default radio button */
input[type="radio"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 20px;
    height: 20px;
    border: 2px solid #007bff;
    border-radius: 50%;
    outline: none;
    cursor: pointer;
    position: relative;
}

/* Style the radio button when checked */
input[type="radio"]:checked::before {
    content: '';
    width: 12px;
    height: 12px;
    background-color: #007bff;
    border-radius: 50%;
    position: absolute;
    top: 2px;
    left: 2px;
}

/* Add a hover effect */
input[type="radio"]:hover {
    border-color: #0056b3;
}

input[type="radio"]:checked:hover::before {
    background-color: #0056b3;
}
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: #f8f9fa;
    color: #495057;
    font-size: 16px;
    outline: none;
    cursor: pointer;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="date"]:hover {
    border-color: #007bff;
}

input[type="date"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}


    </style>
</head>
<body>
    <div class="navbar">
    <img src="{{ asset('https://streamlinehealth.org/wp-content/uploads/2023/08/logo-02.webp') }}" alt="Stre@mline Hospital Logo"><br><br>
    
    <nav>
            <div class="link_container">
                <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </div>
            <div class="link_container">
                <a href="#"><i class="fas fa-users"></i> Patients</a>
            </div>
            <div class="link_container">
                <a href="#"><i class="fas fa-calendar-check"></i> Appointments</a>
            </div>
            <div class="link_container">
                <a href="#"><i class="fas fa-user-md"></i> Doctors</a>
            </div>
            <div class="link_container">
                <a href="#"><i class="fas fa-file-alt"></i> Reports</a>
            </div>
            <!-- Add more navigation links as needed -->
        </nav>

        <!-- Logout Button -->
        <div class="logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" style="background: none; border: none; color: white; cursor: pointer;">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <div class="main-content">
        @yield('content')
    </div>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Stre@mline Hospital. All rights reserved.</p>
    </footer>
</body>
</html>
