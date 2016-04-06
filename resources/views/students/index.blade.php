@extends('layouts.app')

@section('content')

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->comments }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop