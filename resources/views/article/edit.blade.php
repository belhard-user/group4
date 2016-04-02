@extends('welcome')
@section('title', 'Создание новости')
@section('content')
    @include('errors.list')
    {{Form::model($article, ['class' => 'form-horizontal', 'method' => 'put', 'route' => ['article.update', 'article' => $article->id]])}}
        @include('partials.article_form', ['btnName' => 'Обновить'])
    {{Form::close()}}
@endsection