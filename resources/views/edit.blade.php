@extends ('layout')

@section ('content')
    <h1>Edit Project</h1>
    <div class = 'formcontainer'>
    {!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method'=> 'POST']) !!}
    
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $project->title)}}
    
    {{Form::label('type', 'Type')}}
    {{Form::text('type', $project->type)}}
    
    {{Form::label('faculty', 'Faculty')}}
    {{Form::text('faculty', $project->faculty)}}


    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', $project->description,['id'=>'editor1'])}}

    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $project->body,['id'=>'editor2'])}}

    {{Form::label('year', 'Year')}}
    {{Form::number('year', $project->year)}}

    {{Form::hidden('_method','PUT')}}

    {{Form::submit('Submit')}}    

    {!! Form::close() !!}

    </div>   
@endsection