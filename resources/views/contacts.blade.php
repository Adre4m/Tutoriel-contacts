@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</div>

                    <div class="panel-body">
                        Phone number : {{ Auth::user()->phone }} <br>
                        Email : {{ Auth::user()->email }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(count($contacts))
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Contacts</div>

                        <div class="panel-body">
                            @foreach($contacts as $contact)
                                {{$contact->name}} {{ $contact->last_name }}, phone : {{ $contact->phone }}<br>
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
                        <i class="fa fa-btn fa-user"></i>Add a contact
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection