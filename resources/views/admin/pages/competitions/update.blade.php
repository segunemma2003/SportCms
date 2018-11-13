@extends('admin.layouts.master')
@section('title','Competitions')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Add Competitions') }}</div>

                <div class="panel-body">
                    <form method="POST" action="{{route('category.update',$category->id)}}">
                        @csrf

                        <div class="form-group row">
                            <label for="competition_name" class="col-sm-4 col-form-label text-md-right">{{ __('Competition_name') }}</label>

                            <div class="col-md-6">
                                <input id="competition_name" type="text" class="form-control{{ $errors->has('competition_name') ? ' is-invalid' : '' }}" name="competition_name" value="{{$category->competition_name}}" required autofocus>

                                @if ($errors->has('competition_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('competition_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection