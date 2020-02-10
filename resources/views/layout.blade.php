<!DOCTYPE html>
<html>
<head>
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>LBC Projects</title> 
  <script src="{{ asset('js/app.js') }}" defer></script>
  
  <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href='{{asset('css/style.css')}}'>  
</head>
<body>
  <div class ="nav">
  <div class="logo">	
    <a href="/"><img src="/img/lbclogo.jpg"></a>
  </div>
	<label>
    <input type='checkbox' onclick="enableLinks(this)" value="Enable">
    <span class='menu'>
      <span class='hamburger'></span>
    </span>
      <ul class="navlinks">
        <li><a href="/" id="links" class="navlinks">Home</a></li>
        
        <li><a href="/projects" class="navlinks">All Projects</a></li>
        
        <!-- Authentication Links -->
        @guest
        <li><a href="{{ route('login') }}" class="navlinks">{{ __('Teachers') }}</a></li>
        @if (Route::has('register'))
            <li><a href="{{ route('register') }} "class="navlinks">{{ __('Register') }}</a></li>
        @endif
    @else
        <li><a href="\dashboard" class="navlinks">{{ Auth::user()->name }}</a></li>
        <li><a href="/projects/create" class="navlinks">Create</a></li>
         <li><a href="{{ route('logout') }}" class="navlinks" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }} </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
                    @csrf
                </form>
        </li>
        @endguest
      </ul>      
  </label>
  </div>  
    @include('messages')
    @yield('content')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
      
      function enableLinks(btn){
        var links =  document.getElementsByClassName('navlinks'); 
        if(btn.value == "Enable"){ 
          btn.value = "Disable";            
          for(var i=0;i<links.length;i++){
            links[i].style.pointerEvents = "all";
          }
        } else{
          btn.value = "Enable";
          for(var i=0;i<links.length;i++){
            links[i].style.pointerEvents = "none";
          }
        }
      }
      CKEDITOR.replace( 'editor1' );
      CKEDITOR.replace( 'editor2' );
</script>
</body>
</html>