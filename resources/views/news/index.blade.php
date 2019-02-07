@extends('layout.app')

@section('content')
    <h1>This is news index page</h1>
    <a href="{{ route('news.create') }}">Create</a>
@endsection
