@extends('admin.layouts.master')
@section('title','Fixtures')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Add Fixtures') }}</div>

                <div class="panel-body">
                @if($errors->all())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="home" class="col-sm-4 col-form-label text-md-right">{{ __('Home Team') }}</label>

                            <div class="col-md-6">
                            <select id="home" class="form-control{{ $errors->has('home') ? ' is-invalid' : '' }}" name="home" required>
                                @if($teams)
                                    @foreach($teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                @endif

                            </select>
                                

                                @if ($errors->has('home'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('home') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- away                --> 
                        <div class="form-group row">
                            <label for="away" class="col-sm-4 col-form-label text-md-right">{{ __('Away Team') }}</label>

                            <div class="col-md-6">
                            <select id="away" class="form-control{{ $errors->has('away') ? ' is-invalid' : '' }}" name="away" required>
                                @if($teams)
                                    @foreach($teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                @endif

                            </select>
                                

                                @if ($errors->has('away'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('away') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- season -->
                        <div class="form-group row">
                            <label for="season" class="col-sm-4 col-form-label text-md-right">{{ __('Season') }}</label>

                            <div class="col-md-6">
                            <select id="season" class="form-control{{ $errors->has('season') ? ' is-invalid' : '' }}" name="season" required>
                                @if($seasons)
                                    @foreach($seasons as $season)
                                        <option value="{{$season->id}}">{{$season->season}}</option>
                                    @endforeach
                                @endif

                            </select>
                                <strong>if season is not present here add <a href="{{route('season.create')}}">here</a></strong>

                                @if ($errors->has('season'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('season') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- competition -->
                        <div class="form-group row">
                            <label for="competition" class="col-sm-4 col-form-label text-md-right">{{ __('Competition') }}</label>

                            <div class="col-md-6">
                            <select id="competition" class="form-control{{ $errors->has('competition') ? ' is-invalid' : '' }}" name="competition" required>
                                @if($category)
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->competition_name}}</option>
                                    @endforeach
                                @endif

                            </select>
                                <strong>if competition is not present here add <a href="{{route('category.create')}}">here</a></strong>

                                @if ($errors->has('competition'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('competition') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- date -->
                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                            <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date"  value="{{$fixture->date}}" required>
                                

                                @if ($errors->has('date'))       <!-- tim -->
                        <div class="form-group row">
                            <label for="time" class="col-sm-4 col-form-label text-md-right">{{ __('Time') }}</label>

                            <div class="col-md-6">
                            <input id="time" type="time" class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" value="{{$fixture->time}}"required>
                                

                                @if ($errors->has('time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- venue -->
                        <div class="form-group row">
                            <label for="venue" class="col-sm-4 col-form-label text-md-right">{{ __('Venue') }}</label>

                            <div class="col-md-6">
                            <input id="venue" type="text" class="form-control{{ $errors->has('venue') ? ' is-invalid' : '' }}" name="venue" value="{{$fixture->venue}}" required>
                                

                                @if ($errors->has('venue'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('venue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                               <!-- tim -->
                               <div class="form-group row">
                            <label for="time" class="col-sm-4 col-form-label text-md-right">{{ __('Time') }}</label>

                            <div class="col-md-6">
                            <input id="time" type="time" class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" value=""required>
                                

                                @if ($errors->has('time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- venue -->
                        <div class="form-group row">
                            <label for="venue" class="col-sm-4 col-form-label text-md-right">{{ __('Venue') }}</label>

                            <div class="col-md-6">
                            <input id="venue" type="text" class="form-control{{ $errors->has('venue') ? ' is-invalid' : '' }}" name="venue" value="{{$fixture->venue}}" required>
                                

                                @if ($errors->has('venue'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('venue') }}</strong>
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