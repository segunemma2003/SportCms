@extends('admin.layouts.master')
@section('title','Post')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('All Post') }}</div>

                <div class="panel-body">
                <table class='table table-responsive'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Writer's Name</th>
                            <th>Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($posts->isEmpty())
                        <div class="alert alert-danger">
                            No registered post yet
                        </div>
                        @else
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{!! $post->title !!}</td>
                                <td>{!! $post->body !!}</td>
                                <td>{{$post->user->name}}</td>
                                <td><img class="img img-responsive img-circle" width="100px" height="100px" src='/storage/upload/{{$post->title_image}}'/></td>
                                <td>
                                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">Delete</a>
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