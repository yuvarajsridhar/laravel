<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tri Webinar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('/') }}">TriWebinar</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        @if(Auth::user())
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Java</a></li>
            <li><a href="#">Python</a></li>
            <li><a href="#">Blockchain</a></li>
            <li><a href="#">AI</a></li>
          </ul>
        </li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Review</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-log-in"></span>{{ ucwords(Auth->user()->firstname) }} Logout</a></li>
        @else
        <li><a href="{{ URL::to('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{ URL::to('signin') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        @endif

      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="container">
        @yield('content')
    </div>
</div>

</body>
</html>

