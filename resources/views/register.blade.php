@extends('layout');
@section('content')
<h2>Register</h2>
  <form class="form-horizontal" action="register_action" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">
        <label class="control-label col-sm-2" for="Firstname">FirstName:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Firstname" placeholder="Enter Fisrtname" name="firstname">
            @if($errors->has('firstname'))
            <div class="alert alert-danger">
                <p>{{ $errors->first('firstname') }}</p>
            </div>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Lastname">LastName:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Lastname" placeholder="Enter lastname" name="lastname">
          @if($errors->has('lastname'))
          <div class="alert alert-danger">
            <p>{{ $errors->first('lastname') }}</p>
          </div>
          @endif
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        @if($errors->has('email'))
          <div class="alert alert-danger">
            <p>{{ $errors->first('email') }}</p>
          </div>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        @if($errors->has('password'))
          <div class="alert alert-danger">
            <p>{{ $errors->first('password') }}</p>
          </div>
        @endif
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="confirmpassword">ConfirmPassword:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="comfirmpassword" placeholder="Enter password" name="confirmpassword">
          @if($errors->has('confirmpassword'))
          <div class="alert alert-danger">
            <p>{{ $errors->first('confirmpassword') }}</p>
          </div>
          @endif
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
