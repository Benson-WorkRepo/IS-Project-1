@extends('layout')
@section('title', 'Admin Login')
@section('content')

<div class = "loginSection">
<form style = "width: 600px">
<div class="idSection">
<label for="workID">Work ID</label><br>
  <input type="text" id="workID" name="workID">
  </div>

  <div class="passwordSection">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword">
  </div>
  <button type="submit" class="submitButton">Submit</button>
</form>
    </div>
@endsection