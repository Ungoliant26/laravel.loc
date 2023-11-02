@extends('layouts.app')

@section('titleBlock')Главная
@endsection

@section('content')

        <h1>Главная страница</h1>

@endsection

@section('aside')
    @parent
        <p>Текст наследований</p>
@endsection
