@extends('layout')
@section('title', 'Login')
@section('content')

<div class = "loginSection">
<form action = "{{route('login')}}" method = "POST" style = "width: 600px">
<div class="idSection">
<label for="idNumber">ID No</label><br>
  <input type="text" id="idNumber" name="idNumber">
  </div>

  <div class="passwordSection">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword" name="password">
  </div>
  <button type="submit" class="submitButton">Submit</button>
</form>
    </div>
@endsection