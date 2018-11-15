@extends('admin.layouts.master')
@section('title','Players')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('All Competitions') }}</div>

                <div class="panel-body">
                <table class='table table-responsive'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Shirt Number</th>
                            <th>Status</th>
                            <th>Player's picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($players->isEmpty())
                        <div class="alert alert-danger">
                            No players available
                        </div>
                        @else
                            @foreach($players as $player)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$player->name}}</td>
                                <td>{{$player->dob}}</td>
                                <td>{{$player->shirt_number}}</td>
                                <td>{{$player->injury==1?'Available':'Injured'}}</td>
                                <td><img class="img img-responsive img-circle" width="100px" height="100px" src='/storage/upload/players/{{$player->picture}}'/></td>
                                <td>
                                    <a href="{{route('player.edit',$player->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('player.delete',$player->id)}}" class="btn btn-danger">Delete</a>
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