@extends('layouts/admin_layout')

@section('title', 'главная/админка')


@section('content')
    <h4>тут админка работа с цитатами</h4>

    {{-- Проверяем наличие флеш-сообщения --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif



    <div>
        <a href="{{ route('admin.quotes.index') }}" class="btn btn-primary">Список цитат</a>
        <a href="{{ route('admin.quotes.create') }}" class="btn btn-success">Добавить цитату</a>
    </div>

@endsection

