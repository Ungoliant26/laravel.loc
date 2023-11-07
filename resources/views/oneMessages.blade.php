@extends('layouts.app')

@section('titleBlock') {{ $data -> subject }}
@endsection

@section('content')
    <h1>{{ $data -> subject }}</h1>
        <div class="alert alert-info">
            <p> {{ $data -> message }}</p>
            <p>{{ $data -> email }} - {{ $data -> name }}</p>
            <p><small>{{ $data -> created_at }}</small></p>
            <a href="{{ route('contactUpdate', $data -> id) }}"><button class="btn btn-primary">Редактировать</button></a>
            <a href="{{ route('contactDelete', $data -> id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>
@endsection

