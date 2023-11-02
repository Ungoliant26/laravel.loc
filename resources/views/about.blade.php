@extends('layouts.app')

@section('titleBlock')
    О сайте
@endsection

@section('content')
    <h1>О сайте</h1>

    @php
      $content = file_get_contents('http://loripsum.net/api');
    @endphp

    <p>{!! $content !!}</p>
@endsection
