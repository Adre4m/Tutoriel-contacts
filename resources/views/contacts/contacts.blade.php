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
    {!! $dataTable->table() !!}
@endsection

@push('scripts')
    <link href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" type="text/css">
    <script src="//code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
    {!! $dataTable->scripts() !!}
@endpush