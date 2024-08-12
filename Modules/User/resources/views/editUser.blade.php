<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="..resources/css/sign_up.css"> -->

    <style>
                /* 64ac15 */
*,
*:before,
*:after {
  box-sizing: border-box;
}
body {
  padding: 1em;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  color: #b9b9b9;
  background-color: #e3e3e3;
}
button {
  padding: 1em 2em;
  background-color: green;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
a{
  color: green;
  text-decoration: none;
  text-decoration-line: underline;
  font-weight: bold;
  margin: 0 1em;
}
h4 {
  color: green;
}
input,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
input:focus {
  outline: 0;
  border-color: #bd8200;
}
input:focus + .input-icon i {
  color: #f0a500;
}
input:focus + .input-icon:after {
  border-right-color: #f0a500;
}
input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 50%;
  text-align: center;
  float: left;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
  background-color: #f0a500;
  color: #fff;
  border-color: #bd8200;
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  height: 3.4em;
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: lightgreen;
  color: #fff;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.container {
  max-width: 38em;
  padding: 1em 3em 2em 3em;
  margin: 0em auto;
  background-color: #fff;
  border-radius: 4.2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
.row {
  zoom: 1;
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
}
.col-third:last-of-type {
  padding-right: 0;
}
.alert-alert-danger{
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
  max-width: 38em;
  padding: 1em 3em 2em 3em;
  margin: 0em auto;
  border-radius: 2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
@media only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
}

    </style>
    <title>Edit</title>
</head>
<body>
  
<div class="container">
  <form action="{{route('user.update', $users->id)}}" method="POST">
  @csrf
 
  <h4>EDIT HERE</h4>
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon ">
        <input class="@error('name') invalid-feedback @enderror" type="text" placeholder="Full Name" name="name" id="name" value="{{ $users->name}}"/>
        @error('name') <div class="alert-alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
        
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon ">
        <input class="@error('email') invalid-feedback @enderror" type="email" placeholder="Email Adress" name="email" id="email" value="{{ $users->email}}"/>
        @error('email') <div class="alert-alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input class="@error('phone') invalid-feedback @enderror" type="text" placeholder="Phone number" name="phone" id="phone" value="{{ $users->phone}}"/>
        @error('phone') <div class="alert-alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" class="@error('password') invalid-feedback @enderror" placeholder="Password" name="password" id="password" value="{{old('password')}}"/>
        @error('password') <div class="alert-alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
      <div class="input-group input-group-icon">
      <select  name="role" id="role" class="" placeholder="" >
                     <option value="">Select Role</option>
                      <!--Only for dropdown lists-->
                     <option value="2" @if($users->role=='2') selected @endif>Doctor</option>
                     <option value="3" @if($users->role=='3') selected @endif>Lab Supervisor</option>
                     <option value="4" @if($users->role=='4') selected @endif>Lab Assistant</option>
                     <option value="5" @if($users->role=='5') selected @endif>Pharmacist</option>
                     <option value="6" @if($users->role=='6') selected @endif>Nurse</option>
                     <option value="7" @if($users->role=='7') selected @endif>Receptionist</option>
                </select>
                @error('role') <div class="alert-alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>

    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
        <h5>Old Date: {{$users->date_of_birth}}</h5>
          <div class="col-third">
            <input type="text" placeholder="DD" name="day" id="day" value="{{ old('day') }}" required/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM" name="month" id="month" value="{{ old('month') }}" required/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY" name="year" id="year" value="{{ old('year') }}" required/>
          </div>
        </div>
        @error('date_of_birth') <div class="alert-alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input id="gender-male" type="radio" name="gender" value="M"  @if( $users->gender=='M') checked @endif/>
          <label for="gender-male">Male</label>
          <input id="gender-female" type="radio" name="gender" value="F"  @if( $users->gender=='F') checked @endif/>
          <label for="gender-female">Female</label>
        </div>
        @error('gender') <div class="alert-alert-danger">
                    {{ $message }}
                  </div> 
                  @enderror
      </div>
    </div>
      <div style="display: flex; gap: 20px;"><div><button type="submit"><b>Submit</b></button></div><div><a href="{{route('user.index')}}"><b>Cancel</b></a></div></div><br><br> 
      Already have an account ? <br><br><a href=""><b>Log in</b></a>
    </div>
    
  </form>
</div>
</body>
</html>