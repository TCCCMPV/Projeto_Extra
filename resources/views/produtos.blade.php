@extends('layouts.app')
@section('content')
    @foreach ($produtos as $produto )
        <div>
            <p><a href="/produtos/{{$produto->id}}">{{$produto->nome}}</a> || R${{$produto->valor}}</p>
            <p>{{$produto->created_at}} || <a href="/users/{{$produto->user->id}}">{{$produto->user->name}}</a></p>
        </div>
        <hr>
    @endforeach
@endsection