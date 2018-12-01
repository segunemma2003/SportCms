@extends('admin.layouts.master')
@section('title','Post')
@section('content')
<div class="container" style="margin-top:5%; margin-left:28%;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Add News') }}</div>

                <div class="panel-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label text-md-right">{{ __('Post title') }}</label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- body -->
                        <div class="form-group row">
                            <label for="body" class="col-sm-2 col-form-label text-md-right">{{ __('Body') }}</label>

                            <div class="col-md-8">
                                <textarea class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ old('body') }}"></textarea>

                                @if ($errors->has('body'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- summary -->
                        <div class="form-group row">
                            <label for="summary" class="col-sm-2 col-form-label text-md-right">{{ __('Summary') }}</label>

                            <div class="col-md-8">
                                <textarea class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="summary" value="{{ old('summary') }}"></textarea>

                                @if ($errors->has('summary'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- title image -->
                        <div class="form-group row">
                            <label for="title_image" class="col-sm-2 col-form-label text-md-right">{{ __('Image post') }}</label>

                            <div class="col-md-8">
                                <input id="title_image" type="file" class="form-control{{ $errors->has('title_image') ? ' is-invalid' : '' }}" name="title_image" value="{{ old('title_image') }}" autofocus>

                                @if ($errors->has('title_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- catefory news -->
                        <div class="form-group row">
                            <label for="category" class="col-sm-2 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-8">
                                  <select id="category"  class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" autofocus>
                                  <option></option>
                                  @if($allcategory)
                                    @foreach($allcategory as $categ)
                                    <option value="{{$categ->id}}">{{$categ->name}}</option>
                                    @endforeach
                                  @endif
                                    </select>
                                @if ($errors->has('category'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- team fixture -->
                        <div class="form-group row">
                            <label for="fixture" class="col-sm-2 col-form-label text-md-right">{{ __('Related Fixture') }}</label>

                            <div class="col-md-8">
                                  <select id="fixture"  class="form-control{{ $errors->has('fixture') ? ' is-invalid' : '' }}" name="fixture" value="{{ old('fixture') }}" autofocus>
                                  <option></option>
                                  @if($fixtures)
                                    @foreach($fixtures as $categ)
                                    <option value="{{$categ->id}}">{{$categ->homeTeam->name}} VS {{$categ->awayTeam->name}}</option>
                                    @endforeach
                                  @endif
                                    </select>
                                @if ($errors->has('category'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- other images to attach -->
                        <div class="form-group row">
                            <label for="all_image" class="col-sm-2 col-form-label text-md-right">{{ __('Other Images') }}</label>

                            <div class="col-md-8">
                                <input id="all_image" type="file" class="form-control{{ $errors->has('all_image') ? ' is-invalid' : '' }}" name="all_image[]" value="{{ old('all_image[]') }}" autofocus multiple>

                                @if ($errors->has('all_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('all_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- stop -->
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
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nt8lej1ur7292ob759ketnsdo6e9cuhxdss01ly9qv0hqkzz"></script> 
<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
  <script>tinymce.init({ selector:'textarea',
                         menubar:false
   });
  </script>
@endsection