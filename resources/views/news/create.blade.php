@extends('layout.app')

@section('content')
    <h1>This is news creation page</h1>
    <form action="{{ route('news.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <input type="text" class="form-control" id="content" placeholder="Enter content" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
