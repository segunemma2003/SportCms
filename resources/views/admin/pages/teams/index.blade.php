@extends('admin.layouts.master')
@section('title','Dashoard')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('All Teams') }}</div>

                <div class="panel-body">
                <table class='table table-responsive'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Logo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($teams->isEmpty())
                        <div class="alert alert-danger">
                            No registered team yet
                        </div>
                        @else
                            @foreach($teams as $team)
                            <tr>
                                <td>{{$team->id}}</td>
                                <td>{{$team->name}}</td>
                                <td>{{$team->country}}</td>
                                <td><img class="img img-responsive img-circle" width="100px" height="100px" src='/storage/upload/{{$team->file}}'/></td>
                                <td>
                                    <a href="{{route('team.edit',$team->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('team.delete',$team->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection