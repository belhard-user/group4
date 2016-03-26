@extends('main')


@section('content')
    <table class="table">
    @foreach($articles as $article)
        <tr>
            <td>{{ $article->title }}</td>
            <td>{{ $article->short_description }}</td>
            <td>{{ $article->description }}</td>
        </tr>
    @endforeach
    </table>
@endsection