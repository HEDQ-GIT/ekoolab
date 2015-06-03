@extends('layout.master')

@section('title')
    <title></title>
@endsection

@section('content')
    {{--<div class="container center-align" id="clients">--}}
        {{--<h4 class="grey-text lighten-1" style="margin-top: 25px">Some of Our Clients</h4>--}}
        <div class="row deep-orange lighten-4">
            <div class="col l3 m6 s12 wow flipInY" data-wow-duration="1.5s">
                {{--<img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">--}}
            </div>



        </div>
    {{--</div>--}}
    @endsection

@section('body-scripts')
    <script src="{{ elixir("js/app.min.js") }}"></script>
    <script src="{{ elixir("js/index.min.js") }}"></script>
@endsection