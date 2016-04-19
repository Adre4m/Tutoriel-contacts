@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$contact->name . ' ' . $contact->last_name}}</div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/modify' . $contact->id) }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('form.name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $contact->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('form.last_name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ $contact->last_name }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('form.phone') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>{{ trans('pagination.change') }}
                                </button>
                                <a href="{{url('/contacts')}}">
                                    <button type="button" class="btn btn-default">
                                        {{ trans('pagination.cancel') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection