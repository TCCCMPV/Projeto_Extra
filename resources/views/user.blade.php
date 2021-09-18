@extends('layouts.app')
@section('content')
    <h1>Nome: {{$user->name}} <br>
        Email: {{$user->email}}<br>
        Id: {{$user->id}}
    </h1>
@endsection