@extends('main')


@section('content')
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="{{ route('add.test') }}">
        {!! csrf_field() !!}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="name"  value="{{ old('name') }}">
        <input type="text" name="cnt"  value="{{ old('cnt') }}">
        <input type="submit">
    </form>
@stop