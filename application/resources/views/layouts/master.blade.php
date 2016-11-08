<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
	<title>Laravrl login registration</title>
	<link rel="stylesheet prefetch " href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <ul class="nav nav-pills">
  	@if(\Auth::check())
  	  <li>
  	  	{{link_to_route('logout','logout')}}
  	  </li>
  	  @else
  	  <li>
  	  	{{link_to_route('login','login')}}
  	  </li>
  	    @endif

        <li>
        {{link_to_route('users.create','New User')}}
      </li>

  </ul>

  	@yield('content')
  </div>
</body>
</html>