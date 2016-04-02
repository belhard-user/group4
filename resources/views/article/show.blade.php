@extends('welcome')

@section('title', $article->title)


@section('content')
    <h2>{{ $article->title }}</h2>
    <hr>

    <div class="jumbotron">
        {{ $article->description }}
    </div>
    <form action="{{ route('photo', ['article' => $article->id]) }}"
          class="dropzone"
          id="photo">
        {{ csrf_field() }}
    </form>
@endsection

@section('css.header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
@endsection

@section('js.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
@endsection