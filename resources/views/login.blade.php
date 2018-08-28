@extends('layout');

@section('content')
<h2>Login</h2>
@if(Session::has('notsuccess'))
    <div class="row">
        <div class="col-md-12"></div>
            <div class='alert alert-danger' >
                {{ Session::get('notsuccess') }}
            </div>
        </div>
    </div>
@endif
  <form class="form-horizontal" action="login_action" method='post'>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
      <label class="control-label col-sm-2" for="passwprd">Password:</label>
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
