@extends ('layout')

@section ('content')
    <h1>Create Project</h1>
    {!! Form::open(['action' => 'ProjectsController@store', 'method'=> 'POST']) !!}
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '')}}

    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', '')}}

    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', '')}}

    {{Form::label('year', 'Year')}}
    {{Form::number('year', '')}}

    {{Form::submit('Submit')}}

    {!! Form::close() !!}


@endsection
