@extends('layouts.app')

@section('titleBlock')Все сообщения
@endsection

@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el -> subject }}</h3>
            <p>{{ $el -> email }}</p>
            <p><small>{{ $el -> created_at }}</small></p>
            <a href="{{ route('contactMessage', $el -> id) }}"><button class="btn btn-warning">Детализация</button></a>
        </div>
    @endforeach
@endsection

