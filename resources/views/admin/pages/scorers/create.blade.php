@extends('admin.layouts.master')
@section('title','Scorers')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                                
                                <center>
                                <div class="rows">
                                    <div class="col-md-4">
                                    Scorers:<br>
                                    @foreach($fixture->scorer as $score)
                                    {{$score->player['name']}} {{$score->opponentScorer}}
                                    @endforeach
                                    </div>
                                    <div class="col-md-4">
                                    <br>
                                    @foreach($fixture->scorer as $score)
                                    {{$score->time}}
                                    @endforeach
                                    </div>
                                    <div class="col-md-4">
                                    Assist:<br>
                                @foreach($fixture->scorer as $score)
                                {{$score->assistname['name']}} {{$score->opponentAssist}}
                                
                                @endforeach
                                    </div>
                                </div>
                               
                                <b>{{date($fixture->date)}}</b><br>
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
                    <div class="row">
                        <div class="col-md-5">
                        <div class="form-group row">
                            <label for="home_score" class="col-sm-4 col-form-label text-md-right">{{ __(ucfirst($fixture->homeTeam->name)) }}</label>

                            <div class="col-md-4">
                                <input id="home_score" min="1" type="number" class="form-control{{ $errors->has('home_score') ? ' is-invalid' : '' }}" name="home_score" value="{{ $fixture->home_score }}"  style="width:100px;" autofocus>

                                
                               
                                
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
                        
                            @if(ucfirst($fixture->homeTeam->name)!='Enyimba Fc')

                            <input id="scorer_name" type="" class="form-control{{ $errors->has('scorer_name') ? ' is-invalid' : '' }}" name="scorer_nameop"  width="5px">
                             @else   
                                
                                
                            <select id="scorer_name" type="" class="form-control{{ $errors->has('scorer_name') ? ' is-invalid' : '' }}" name="scorer_name">
                            
                                <option></option>
                                @if($fixture->homeTeam->current)
                                @foreach($fixture->homeTeam->current as $player)
                                <option value="{{$player->id}}">{{$player->name}}</option>
                                @endforeach
                                @endif
                            </select>
                             @endif    
                               
                                
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

                            
                            @if(ucfirst($fixture->homeTeam->name)!='Enyimba Fc')
                            <input id="assist_nameop" type="" class="form-control{{ $errors->has('assist_name') ? ' is-invalid' : '' }}" name="assist_nameop"  width="5px">

                            @else   
                                
                                
                            <select id="assist_name" type="" class="form-control{{ $errors->has('assist_name') ? ' is-invalid' : '' }}" name="assist_name">

                                <option></option>
                                @if($fixture->homeTeam->current)
                                @foreach($fixture->homeTeam->current as $player)
                                <option value="{{$player->id}}">{{$player->name}}</option>
                                @endforeach
                                @endif
                            </select>
                            @endif                                 
                               
                                
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
                        </div>
                        <!-- end of scorer -->
                <div class="col-md-2">
                            <h1>vs</h1> 
                </div>
                            <!-- jsckmjo -->
                <div class="col-md-5">
                        <div class="form-group row">
                            <label for="away_score" class="col-sm-4 col-form-label text-md-right">{{ __(ucfirst($fixture->awayTeam->name)) }}</label>
                            <div class="col-md-4">
                            <input id="away_score"  min="1" type="number" class="form-control{{ $errors->has('away_score') ? ' is-invalid' : '' }}" name="away_score" value="{{ $fixture->away_score }}" style="width:100px;"  autofocus>

                                 
                               
                                
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
                        
                            @if(ucfirst($fixture->awayTeam->name)!='Enyimba Fc')

                            <input id="scorer_name" type="" class="form-control{{ $errors->has('scorer_name') ? ' is-invalid' : '' }}" name="scorer_nameop"  width="5px">
                             @else   
                                
                                
                            <select id="scorer_name" type="" class="form-control{{ $errors->has('scorer_name') ? ' is-invalid' : '' }}" name="scorer_name">
                            
                                <option></option>
                                @if($fixture->awayTeam->current)
                                @foreach($fixture->awayTeam->current as $player)
                                <option value="{{$player->id}}">{{$player->name}}</option>
                                @endforeach
                                @endif
                            </select>
                             @endif    
                               
                                
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

                            
                            @if(ucfirst($fixture->awayTeam->name)!='Enyimba Fc')
                            <input id="assist_name" type="" class="form-control{{ $errors->has('assist_name') ? ' is-invalid' : '' }}" name="assist_nameop"  width="5px">

                            @else   
                                
                                
                            <select id="assist_name" type="" class="form-control{{ $errors->has('assist_name') ? ' is-invalid' : '' }}" name="assist_name">

                                <option></option>
                                
                                @if($fixture->awayTeam->current)
                                @foreach($fixture->awayTeam->current as $player)
                                <option value="{{$player->id}}">{{$player->name}}</option>
                                @endforeach
                                @endif
                            </select>
                            @endif                                 
                               
                                
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

                            <input id="minutes" type="" class="form-control{{ $errors->has('minutes') ? ' is-invalid' : '' }}" name="minutes"  width="5px">
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
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection