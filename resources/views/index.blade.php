@extends ('layout')

@section ('content')
    <h2>Year 10 Projects</h2>
    @if(count($projects)>0)
    @foreach($projects as $project)
    <div class="container">
        
    <div class="card" >
    	<div class="front" id="{{$project->faculty}}">  
        <h1>{{$project->title}}</h1>
        <img src="/img/boardgame.jpg">		
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