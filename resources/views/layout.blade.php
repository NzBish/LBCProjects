<!DOCTYPE html>
<html>
<head>
	<title>Year 10</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Passion+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href='{{asset('css/style.css')}}'>  
</head>
<body>
	<div class="nav">		
      <div class="logo"></div>
      <ul class="nav-links">
        <li><a href="/">About</a></li>
        <li><a href="/projects/create">Create</a></li>
        <li><a href="/projects">Projects</a></li>
      </ul>      
    </div>
    @include('messages')
    @yield('content')

</body>
</html>