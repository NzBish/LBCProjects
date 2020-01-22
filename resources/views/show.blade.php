@extends ('layout')

@section ('content')
<div class="description">
  
    <h1>{{$project->title}}</h1>
    <div class= "headings">
    <h3>{{$project->faculty}} Faculty</h3>
    <h3>{{$project->type}}</h3>
    </div>
    <p >{!!$project->body!!}</p>
  </div>
  <hr>
  @if(!Auth::guest())
  <div class="edit_delete">
  <a id="edit_button" href="/projects/{{$project->id}}/edit">Edit</a>
  {!!Form::open(['action'=>['ProjectsController@destroy', $project->id], 'method'=>'POST' ])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete')}}
  {!!Form::close()!!}
  </div>
  @endif
@endsection

