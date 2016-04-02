@extends('welcome')

@section('title', 'Создание новости')

@section('content')

    @foreach($articles as $article)
        <div class="jumbotron">
            <h2>{{ $article->title }}</h2>
            <div>
                {{ $article->short_description }}
                <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="pull-right">Редактировать</a>
            </div>
        </div>
    @endforeach

@endsection