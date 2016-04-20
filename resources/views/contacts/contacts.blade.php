<!--DataTables-->
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

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
                <div class="panel panel-default">
                    <div class="panel-heading">Contacts</div>
                        <a href="/add">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-btn fa-user"></i>
                                {{ trans('form.add') }}
                            </button>
                        </a>
                         {!! $dataTable->table() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <link href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" type="text/css">
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
    {!! $dataTable->scripts() !!}
@endpush