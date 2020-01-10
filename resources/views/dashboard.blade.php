@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">         
                <a href="projects/create" class="btn btn-primary">Create a project</a>
                <h3>Your Projects</h3>
                @if(count($projects)>0)
                <table class="table table-striped">
                    <tr>
                        <th>Title</th> 
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{$project->title}}</td> 
                        <td><a href="/projects/{{$project->id}}/edit" class="btn btn-default">Edit</a></td>
                        <td>{!!Form::open(['action'=>['ProjectsController@destroy', $project->id], 'method'=>'POST' ])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete')}}
                          {!!Form::close()!!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else 
                <p>You have no projects yet</p>
                @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
