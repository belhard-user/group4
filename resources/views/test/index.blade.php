@extends('main')

@section('content')
    <ul>
        @foreach($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>
@endsection


@section('title', 'ogo')
@section('page-id', 'test')