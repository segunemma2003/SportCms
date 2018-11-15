@extends('admin.layouts.master')
@section('title','Season')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Add Season') }}</div>

                <div class="panel-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="season" class="col-sm-4 col-form-label text-md-right">{{ __('Season') }}</label>

                            <div class="col-md-6">
                                <input id="season" type="text" class="form-control{{ $errors->has('season') ? ' is-invalid' : '' }}" name="season" value="{{ old('season') }}" required autofocus>
                                <strong>format should be 2011/2012</strong>
                                @if ($errors->has('season'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('season') }}</strong>
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