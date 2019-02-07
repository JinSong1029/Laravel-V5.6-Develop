@extends('layout.app')

@section('content')
    <h1>This is content main page</h1>
    <a href="{{route('create_news')}}">Create</a>
@endsection
