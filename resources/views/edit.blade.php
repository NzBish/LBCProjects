@extends ('layout')

@section ('content')
    <h1>Edit Project</h1>
    <div class = 'formcontainer'>
    {!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method'=> 'POST']) !!}
    
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $project->title)}}
    
    {{Form::label('type', 'Type')}}    
    {{Form::select('type', ['Major'=>'Major','Minor'=>'Minor'],$project->type)}}
    
    {{Form::label('faculty', 'Faculty')}}
    {{Form::select('faculty', ['Business'=>'Business', 'English'=>'English', 'Science'=>'Science','Technology'=>'Technology', 'Health-PE'=>'Health-PE','SocialSciences'=>'SocialSciences', 'Maths'=>'Maths','VisualArts'=>'VisualArts','PerformingArts'=>'PerformingArts', 'Languages'=>'Languages', 'DigitalWorkingGroup'=>'DigitalWorkingGroup', 'PESports'=>'PESports'],$project->faculty)}}


    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', $project->description,['id'=>'editor1'])}}

    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $project->body,['id'=>'editor2'])}}

    {{Form::label('year', 'Year')}}
    {{Form::select('year', ['9'=>'9','10'=>'10'],$project->year)}}

    {{Form::hidden('_method','PUT')}}

    {{Form::submit('Submit')}}    

    {!! Form::close() !!}

    </div>   
@endsection