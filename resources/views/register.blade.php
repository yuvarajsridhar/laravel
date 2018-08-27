@extends('layout');
@section('content')
@if($errors->has())
<div class ="alert alert-danger">
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
<h2>Register</h2>
  <form class="form-horizontal" action="register_action" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">
        <label class="control-label col-sm-2" for="Firstname">FirstName:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Firstname" placeholder="Enter Fisrtname" name="firstname">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Lastname">LastName:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Lastname" placeholder="Enter lastname" name="lastname">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="confirmpassword">ConfirmPassword:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="comfirmpassword" placeholder="Enter password" name="confirmpassword">
        </div>
      </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
@endsection
