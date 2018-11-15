@extends('admin.layouts.master')
@section('title','Players')
@section('content')

<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Add Players') }}</div>
                @if($errors->all())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="panel-body">
                    <form method="POST" enctype="multipart/form-data">
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
                                <input id="year_of_contract" type="text" class="form-control{{ $errors->has('year_of_contract') ? ' is-invalid' : '' }}" name="years_of_contract" value="{{ old('year_of_contract') }}" required autofocus>

                                @if ($errors->has('year_of_contract'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year_of_contract') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- salary -->
                        <div class="form-group row">
                            <label for="salary" class="col-sm-4 col-form-label text-md-right">{{ __('Total salary') }}</label>

                            <div class="col-md-6">
                                <input id="salary" type="text" class="form-control{{ $errors->has('salary') ? ' is-invalid' : '' }}" name="salary" value="{{ old('salary') }}" required autofocus>

                                @if ($errors->has('salary'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- year_signed -->
                        <div class="form-group row">
                            <label for="year_signed" class="col-sm-4 col-form-label text-md-right">{{ __('Year Signed') }}</label>

                            <div class="col-md-6">
                                <input id="year_signed" type="text" class="form-control{{ $errors->has('year_signed') ? ' is-invalid' : '' }}" name="year_signed" value="{{ old('year_signed') }}" required autofocus>

                                @if ($errors->has('year_signed'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year_signed') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- team_id -->
                                <input  type="hidden" name="team_id" value="1">

                                
                        <!-- former club -->
                        <div class="form-group row">
                            <label for="former_club" class="col-sm-4 col-form-label text-md-right">{{ __('Ex Club') }}</label>

                            <div class="col-md-6">
                                <select id="former_club" class="form-control{{ $errors->has('former_club') ? ' is-invalid' : '' }}" name="former_club" value="{{ old('former_club') }}">
                                    @if($teams)
                                        @foreach($teams as $team)
                                            <option value="{{$team->id}}">{{$team->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <small class="text-success">if None, just pick Enyimba fc</small>

                                @if ($errors->has('year_signed'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year_signed') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <!-- picture -->
                        <div class="form-group row">
                            <label for="picture" class="col-sm-4 col-form-label text-md-right">{{ __("Player's Picture") }}</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" value="{{ old('picture') }}" required autofocus>

                                @if ($errors->has('picture'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- /utton -->
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