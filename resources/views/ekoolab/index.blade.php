@extends('layout.master')

@section('title')
    <title></title>
@endsection

@section('content')
    @include('partials/video')

    @include('partials/service')

    @include('partials/works')

    @include('partials/clients')

@endsection

@section('body-scripts')
    <script src="{{ elixir("js/app.min.js") }}"></script>
    <script src="{{ elixir("js/index.min.js") }}"></script>
@endsection