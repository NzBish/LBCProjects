<!DOCTYPE html>
<html>
<head>
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>LBC Projects</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
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
        
        <!-- Authentication Links -->
        @guest
        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @if (Route::has('register'))
            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @endif
    @else
        <li><a href="\dashboard">{{ Auth::user()->name }}</a></li>
         <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }} </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
                    @csrf
                </form>
        </li>
        @endguest
      </ul>      
    </div>
    @include('messages')
    @yield('content')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'editor1' );
      CKEDITOR.replace( 'editor2' );
</script>
</body>
</html>