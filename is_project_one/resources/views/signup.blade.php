@extends('layout')
@section('title', 'Sign Up')
@section('content')

<div class = "signupSection">
<form style = "width: 600px">
<div class = "firstName">
    <label for>First Name</label><br>
    <input type ="text" id="firstName">
</div>
<div class = "lastName">
    <label for>Last Name</label><br>
    <input type ="text" id="lastName">
</div>
<div class = "emailAddress">
    <label for>Email</label><br>
    <input type ="text" id="emailAddress">
</div>
<div class = "phoneNo">
    <label for>Phone Number</label><br>
    <input type ="tel" id="phoneNo">
</div>
<div class="idSection">
<label for="idNumber">ID No</label><br>
  <input type="text" id="idNumber" name="idNumber">
  </div>

  <div class="passwordSection">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword">
  </div>
  <button type="submit" class="submitButton">Submit</button>
</form>
    </div>
@endsection