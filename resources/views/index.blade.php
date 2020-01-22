@extends ('layout')

@section ('content')
    <h1 class = "title">Year {{$year}} Projects</h1>
    <div class="container">
    @if(count($projects)>0)
    @foreach($projects as $project)
    
        
    <div class="card" >
    	<div class="front" id="{{$project->faculty}}">  
        <h1>{{$project->title}}</h1>
        <img src="/img/{{$project->faculty}}.jpg">		
    	</div>
    	<div class="back">
    		<div class="back-content middle">
    			<h2>{{$project->title}}</h2>
    			<p>{!!$project->description!!}</p>    			
    			<a class="card-link" href="/projects/{{$project->id}}">Read More</a>    				
                <div class="badge">
                    <span>{{$project->type}}</span>
                </div>
            </div>
        </div>
    </div>
        
   
    @endforeach 
</div> 
    @else  
        <p>No projects found</p>
    @endif

@endsection