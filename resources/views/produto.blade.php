@extends('layouts.app')
@section('content')
    <img src="{{$produto->foto}}">
    <h1>{{$produto->nome}}</h1>
    <h2>R${{$produto->valor}}</h2>
    <h3><a href="/users/{{$produto->user_id}}">{{$produto->user->name}}</a> {{$produto->created_at}}</h3>
    <p>{{$produto->description}}</p>
@endsection