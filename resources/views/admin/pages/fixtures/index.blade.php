@extends('admin.layouts.master')
@section('title','Fixtures')
@section('content')
<div class="container" style="margin-top:5%; margin-left:25%;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('All Competitions') }}</div>

                <div class="panel-body">
                <table class='table table-responsive'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fixture</th>
                            <th>Competition</th>
                            <th>Season</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($fixtures->isEmpty())
                        <div class="alert alert-danger">
                            No recoreded fixtures
                        </div>
                        @else
                            @foreach($fixtures as $fixture)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td width="300px">{{$fixture->homeTeam->name}}  <span style="border:1px solid black; padding:3px; box-shadow:2px 2px 4px grey;">{{!isset($fixture->home_score)?'?':$fixture->home_score}}</span> vs <span style="border:1px solid black; box-shadow:2px 2px 4px grey; padding:3px;">{{!isset($fixture->away_score)?'?':$fixture->away_score}}</span> {{$fixture->awayTeam->name}}</td>
                                <td>{{$fixture->competitions->competition_name}}</td>
                                <td>{{$fixture->seasons->season}}</td>
                                <td>{{$fixture->date}}</td>
                                <td>{{$fixture->venue}}</td>
                                <td>{{$fixture->time}}</td>
                                <td>
                                    <a href="{{route('fixture.edit',$fixture->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('fixture.delete',$fixture->id)}}" class="btn btn-danger">Delete</a>
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