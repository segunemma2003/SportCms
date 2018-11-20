@extends('admin.layouts.master')
@section('title','Scorers')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- fixture -->
        <div class="row">
                        <div class='col-md-4'>
                            <div class="card">
                                <img src="/storage/upload/{{$fixture->homeTeam->file}}" alt="{{$fixture->homeTeam->name}}" width="300px" height="200px">
                                <div class="card-body">
                                <h4>{{$fixture->homeTeam->name}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-4'><h2 style="margin:70px;"><span> {{!isset($fixture->home_score)?'?':$fixture->home_score}} </span> VS <span> {{!isset($fixture->away_score)?'?':$fixture->away_score}} </span></h2>
                                <center><b>{{date($fixture->date)}}</b><br>
                                <b>{{$fixture->time}}</b></center>
                        </div>
                        <div class='col-md-4'>
                            <div class="card">
                                <img src="/storage/upload/{{$fixture->awayTeam->file}}" alt="{{$fixture->awayTeam->name}}"width="300px" height="200px">
                                <div class="card-body">
                                <h4>{{$fixture->awayTeam->name}}</h4>
                                </div>
                            </div>
                        </div>
                   </div>
        <!-- endfixturre -->
        <hr>
            <div class="panel panel-default">
           
                <div class="panel-heading">{{ __('Update Scores') }}</div>

                <div class="panel-body">
                   
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="home_score" class="col-sm-4 col-form-label text-md-right">{{ __(ucfirst($fixture->homeTeam->name)) }}</label>

                            <div class="col-md-2">
                                <input id="home_score" type="number" class="form-control{{ $errors->has('home_score') ? ' is-invalid' : '' }}" name="home_score" value="{{ $fixture->home_score }}"  width="5px" required autofocus>

                                
                               
                                
                                @if ($errors->has('home_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('home_score') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <h1>vs</h1> 
                            <!-- jsckmjo -->
                            <hr>
                        <div class="form-group row">
                            <label for="away_score" class="col-sm-4 col-form-label text-md-right">{{ __(ucfirst($fixture->awayTeam->name)) }}</label>
                            <div class="col-md-2">
                            <input id="away_score" type="number" class="form-control{{ $errors->has('away_score') ? ' is-invalid' : '' }}" name="away_score" value="{{ $fixture->away_score }}"  width="5px" required autofocus>

                                 
                               
                                
                                @if ($errors->has('home_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('home_score') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        <!-- scorer name -->
                        <div class="form-group row">
                            <label for="scorer_name" class="col-sm-4 col-form-label text-md-right">{{ __("Scorer name") }}</label>
                            <div class="col-md-4">

                            <input id="scorer_name" type="" class="form-control{{ $errors->has('scorer_name') ? ' is-invalid' : '' }}" name="scorer_name"  width="5px">
                                <!-- <option></option>
                                
                            </select> -->
                            
                                <!-- <option></option>
                                @if($fixture->awayTeam->current)
                                @foreach($fixture->awayTeam->current as $player)
                                <option value="{{$player->id}}">{{$player->name}}</option>
                                @endforeach
                                @endif
                            </select> -->
                                 
                               
                                
                                @if ($errors->has('scorer_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('scorer_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        <!-- assist name -->
                        <div class="form-group row">
                            <label for="assist_name" class="col-sm-4 col-form-label text-md-right">{{ __("Assist name")}}</label>
                            <div class="col-md-4">

                            <input id="assist_name" type="" class="form-control{{ $errors->has('assist_name') ? ' is-invalid' : '' }}" name="assist_name"  width="5px">
                                <!-- <option></option>
                                
                            </select> -->
                            
                                <!-- <option></option>
                                @if($fixture->awayTeam->current)
                                @foreach($fixture->awayTeam->current as $player)
                                <option value="{{$player->id}}">{{$player->name}}</option>
                                @endforeach
                                @endif
                            </select> -->
                                 
                               
                                
                                @if ($errors->has('assist_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('assist_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- minute score -->
                        <div class="form-group row">
                            <label for="minute" class="col-sm-4 col-form-label text-md-right">{{ __("Minute")}}</label>
                            <div class="col-md-4">

                            <input id="minute" type="" class="form-control{{ $errors->has('minute') ? ' is-invalid' : '' }}" name="minute"  width="5px">
                                <!-- <option></option>
                                
                            </select> -->
                            
                                <!-- <option></option>
                                @if($fixture->awayTeam->current)
                                @foreach($fixture->awayTeam->current as $player)
                                <option value="{{$player->id}}">{{$player->name}}</option>
                                @endforeach
                                @endif
                            </select> -->
                                 
                               
                                
                                @if ($errors->has('minute'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('minute') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- ttt -->
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