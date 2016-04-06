@extends('layouts.app')

@section('content')

    <form action="{{ route('resources.store') }}" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" name="url" placeholder="http://" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" rows="3" class="form-control"></textarea>
        </div>

        <button>
            <i class="fa fa-thumbs-up"></i>
            Create Resource
        </button>
    </form>

@stop