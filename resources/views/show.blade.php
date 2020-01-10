@extends ('layout')

@section ('content')
<div class="description">
    <h1>{{$project->title}}</h1>
    <p >{!!$project->body!!}</p>
  </div>
  <hr>
  @if(!Auth::guest())
  <a href="/projects/{{$project->id}}/edit">Edit</a>
  {!!Form::open(['action'=>['ProjectsController@destroy', $project->id], 'method'=>'POST' ])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete')}}
  {!!Form::close()!!}
  @endif
@endsection

