@extends('layouts.app')

@section('title')
    <h1>Hello</h1>
@endsection
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
