@extends ('layout')

@section ('content')
    <h1>Create Project</h1>
    <div class = 'formcontainer'>
    {!! Form::open(['action' => 'ProjectsController@store', 'method'=> 'POST']) !!}
    
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '')}}

    {{Form::label('type', 'Type')}}
    {{Form::select('type', ['Major'=>'Major','Minor'=>'Minor'],null,['placeholder' => 'Pick a type...'])}}
    
    {{Form::label('faculty', 'Faculty')}}
    {{Form::select('faculty', ['Business'=>'Business', 'English'=>'English', 'Science'=>'Science','Technology'=>'Technology', 'Health-PE'=>'Health-PE','SocialSciences'=>'SocialSciences', 'Maths'=>'Maths','VisualArts'=>'VisualArts','PerformingArts'=>'PerformingArts', 'Languages'=>'Languages', 'DigitalWorkingGroup'=>'DigitalWorkingGroup', 'PESports'=>'PESports'],null,['placeholder' => 'Pick a faculty...'])}}

    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', '',['id'=>'editor1'])}}

    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', '',['id'=>'editor2'])}}

    {{Form::label('year', 'Year')}}
    {{Form::select('year', ['9'=>'9','10'=>'10'],null,['placeholder' => 'Pick a year...'])}}

    {{Form::submit('Submit')}}    

    {!! Form::close() !!}

    </div>   
@endsection
