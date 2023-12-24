@extends('layouts.app')

@section('content')
    <h1>Користувачі</h1>
    <table border="1">
        <thead>
        <tr>
            <th>id</th>
            <th>Ім'я</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
