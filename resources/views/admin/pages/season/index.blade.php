@extends('admin.layouts.master')
@section('title','Dashoard')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('All Seasons') }}</div>

                <div class="panel-body">
                <table class='table table-responsive'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Season</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($seasons->isEmpty())
                        <div class="alert alert-danger">
                            No registered Season
                        </div>
                        @else
                            @foreach($seasons as $season)
                            <tr>
                                <td>{{$season->id}}</td>
                                <td>{{$season->season}}</td>
                                <td>
                                    <a href="{{route('season.edit',$season->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('season.delete',$season->id)}}" class="btn btn-danger">Delete</a>
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