<!--DataTables-->
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script href="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
<script href="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</div>

                    <div class="panel-body">
                        {{ trans('form.phone') . ' : ' . auth()->user()->phone }} <br>
                        {{trans('form.mail') . ' : ' . auth()->user()->email }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($contacts->count())
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Contacts</div>
                        <div class="panel-body">
                            @foreach($contacts as $contact)
                                <div class="panel-group">
                                    {{$contact->name}} {{ $contact->last_name }}, phone : {{ $contact->phone }}
                                    <span style="float: right; margin-left:50%;">
                                        <a href="/modify{{ $contact->id }}">
                                            <button class="btn btn-warning" type="button">
                                                {{ trans('form.edit') }}
                                            </button>
                                        </a>
                                        <a href="/delete{{ $contact->id }}">
                                            <button class="btn btn-danger" type="button">
                                                {{ trans('form.delete') }}
                                            </button>
                                        </a>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="/add">
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-btn fa-user"></i>
                        {{ trans('form.add') }}
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection