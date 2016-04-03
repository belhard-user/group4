@extends('welcome')

@section('title', $article->title)


@section('content')

    <div class="row">
        <div class="col-md-4">
            <h2>{{ $article->title }}</h2>
            <hr>

            <div class="jumbotron">
                {{ $article->description }}
            </div>
        </div>
        <div class="col-md-8">
            <h2>Картнки</h2>
            <hr>
            @forelse($article->photos->chunk(3) as $photo)
                <div class="row">
                    @foreach($photo as $item)
                        <div class="col-md-4">
                            <img class="article__image img-thumbnail" src="/{{ $item->th_path }}" alt="">
                        </div>
                    @endforeach
                </div>
            @empty
                <p>Нету фотографий</p>
            @endforelse
            <form action="{{ route('photo', ['article' => $article->id]) }}"
                  class="dropzone"
                  id="photo">
                {{ csrf_field() }}
            </form>
        </div>
    </div>

@endsection

@section('css.header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
@endsection

@section('js.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

    <script>
        Dropzone.options.photo = {
            paramName: 'photo',
            maxFilesize: 2,
            // maxFiles: 3
            acceptedFiles: '.jpg, .jpeg',
            dictDefaultMessage: 'Файлы на бочку',
            dictInvalidFileType: 'Хрен вам2'
        };
    </script>
@endsection