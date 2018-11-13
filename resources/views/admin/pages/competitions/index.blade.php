@extends('admin.layouts.master')
@section('title','Competitions')
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
                            <th>Competition Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($category->isEmpty())
                        <div class="alert alert-danger">
                            No category
                        </div>
                        @else
                            @foreach($category as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->competition_name}}</td>
                                <td>
                                    <a href="{{route('category.edit',$cat->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('category.delete',$cat->id)}}" class="btn btn-danger">Delete</a>
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