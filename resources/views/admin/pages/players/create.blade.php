@extends('admin.layouts.master')
@section('title','Players')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Add Players') }}</div>

                <div class="panel-body">
                    <form method="POST">
                        @csrf
                        <!-- name -->
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- dob -->
                        <div class="form-group row">
                            <label for="dob" class="col-sm-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- weight -->
                        <div class="form-group row">
                            <label for="weight" class="col-sm-4 col-form-label text-md-right">{{ __('Weight') }}</label>

                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" name="weight" value="{{ old('weight') }}" required autofocus>

                                @if ($errors->has('weight'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- height -->
                        <div class="form-group row">
                            <label for="height" class="col-sm-4 col-form-label text-md-right">{{ __('Height') }}</label>

                            <div class="col-md-6">
                                <input id="height" type="text" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height" value="{{ old('height') }}" required autofocus>

                                @if ($errors->has('height'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- shirt_number -->
                        <div class="form-group row">
                            <label for="shirt_number" class="col-sm-4 col-form-label text-md-right">{{ __('Shirt Number') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('shirt_number') ? ' is-invalid' : '' }}" name="shirt_number" value="{{ old('shirt_number') }}" required autofocus>

                                @if ($errors->has('shirt_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('shirt_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- year_of_contract -->
                        <div class="form-group row">
                            <label for="year_of_contract" class="col-sm-4 col-form-label text-md-right">{{ __('Years of Contract') }}</label>

                            <div class="col-md-6">
                                <input id="year_of_contract" type="text" class="form-control{{ $errors->has('year_of_contract') ? ' is-invalid' : '' }}" name="year_of_contract" value="{{ old('year_of_contract') }}" required autofocus>

                                @if ($errors->has('year_of_contract'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year_of_contract') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- salary -->
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