@extends('layouts.app')

@section('titleBlock')Контакты
@endsection

@section('content')
    <h1>Страница контактов</h1>

    <form   action="{{ route('contactForm') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема</label>
            <input type="text" name="subject" placeholder="Введите тему" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success" id="submitUser">Отправить данные</button>
    </form>
@endsection
