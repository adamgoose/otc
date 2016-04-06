@extends('layouts.app')

@section('content')

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resources as $resource)
                <tr>
                    <td>{{ $resource->id }}</td>
                    <td>{{ $resource->title }}</td>
                    <td>{{ $resource->url }}</td>
                    <td>#</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop