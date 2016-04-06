@extends('layout')

@section('content')

    <br><br><br><br><br><br><br><br><br><br>

    <div class="row">
        <div class="col-xs-4 col-xs-offset-4" id="registrationForm">

            @if($errors->count())
                <div class="alert alert-danger">
                    <strong>Oops, looks like you missed something!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Register!</div>
                <div class="panel-body">

                    <form action="/students" method="post">

                        {!! csrf_field() !!}
                    
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <textarea name="comments" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Register!</button>

                    </form>
                    
                </div>
            </div>

        </div>
    </div>

@stop