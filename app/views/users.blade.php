@extends('layout')

@section('content')

    @foreach($users as $user)
        <p>User name: {{{ $user->name }}}</p>

    @endforeach
@stop