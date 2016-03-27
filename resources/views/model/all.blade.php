@extends('main')

@section('content')

    <table class="table ">
        <tr>
            <th>Имя</th>
            <th>Email</th>
            <th>Удалено?</th>
            <th>Дата добавления</th>
        </tr>
        @foreach($all as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->trashed() ? 'Да' : 'Нет' }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    </table>
    {!! $all->appends(['sort' => 'votes'])->links() !!}

@stop