@extends('layout.main')

@section('title', 'create video')

@section('body')
    <form method="post">
        <div class="form-group">
            <label for="username">Title</label>
            <input type="text" class="form-control" id="username"
                   placeholder="User name" value="Dino">
        </div>
        <div class="form-group">
            <label for="password">Description</label>
            <textarea name="password"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
