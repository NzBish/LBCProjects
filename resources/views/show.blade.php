@extends ('layout')

@section ('content')
<div class="description">
    <h1>{{$project->title}}</h1>
    <p >{{$project->body}}</p>
  </div>
@endsection

