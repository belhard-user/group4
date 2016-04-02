@extends('welcome')
@section('title', 'Создание новости')
@section('content')
    @include('errors.list')
    {{Form::open(['class' => 'form-horizontal'])}}
        @include('partials.article_form', ['btnName' => 'Сохранить'])
    {{Form::close()}}
@endsection