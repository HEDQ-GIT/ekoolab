@extends('layout.master')

@section('title')
    <title></title>
@endsection

@section('content')
    <div class="container content-full" id="video-con">
        <div class="row" id="video-row">
            <div class="col l12 m12 s12" id="video-col">
                <video x-webkit-airplay="allow" loop="loop" preload="true" autoplay="autoplay" width="100%">
                    <source src="http://s3.amazonaws.com/cloudways-website-videos/Home.mp4">
                    <!--[if LT IE  9]>
                    <object type="application/x-shockwave-flash"
                            data="http://flashfox.googlecode.com/svn/trunk/flashfox.swf"
                            id="hm-top_video-target_embed_object" class="cw-videobg-embed">
                        <param name="movie" value="http://flashfox.googlecode.com/svn/trunk/flashfox.swf">
                        <param name="allowFullScreen" value="true">
                        <param name="wmode" value="transparent">
                        <param name="flashVars"
                               value="src=http://s3.amazonaws.com/cloudways-website-videos/Home.mp4&autoplay=true&controls=false&loop=true&poster=">
                    </object>   <![endif]-->
                    {{--poster="https://static-videos.pexels.com/images/video-pictures/464/preview-14.jpg"--}}{{-->--}}
                </video>
            </div>
        </div>
        <div class="row" id="cover-row">
            <div class="col l12 m12 s12 deep-orange lighten-1" id="cover-col"></div>
        </div>
        <div class="row" style="transform: translateY(-600%);">
            <div class="col l8 offset-l2">
                <div style="margin: auto auto">
                    <span class="white-text flow-text" id="paper"></span>
                    <span class="flow-text" id="cursor"></span>
                </div>
            </div>
        </div>

    </div>

    <div class="container content-part center-align">
        <h4 class="grey-text lighten-1" >We are one stop solution agency for all of your</h4>
        <h3 class="grey-text darken-4 wow zoomIn" data-wow-duration="2s">creative and marketing needs</h3>
        <div class="row">
            <div class="col l3 m3 s3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                <div class="center-align thumbnail">
                    <div class="circle"><a href="{{ url('/') }}"></a></div>
                    <div class="card-content">
                        <h6><a href="{{ url('/') }}">Web & Mobile Design</a></h6>

                        <p>I am a very simple card. I am good at containing small bits.</p>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="1.8s">
                <div class="center-align thumbnail">
                    <div class="circle">
                        <a href="{{ url('/') }}" style="background-position: -1622px -3px"></a>
                    </div>
                    <div class=" card-content">
                        <h6><a href="{{ url('/') }}">Web & Mobile Design</a></h6>

                        <p>I am a very simple card. I am good at containing small bits.</p>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="2.1s">
                <div class="center-align thumbnail">
                    <div class="circle">
                        <a href="{{ url('/') }}" style="background-position: -682px -3px"></a>
                    </div>
                    <div class=" card-content">
                        <h6><a href="{{ url('/') }}">Web & Mobile Design</a></h6>

                        <p>I am a very simple card. I am good at containing small bits.</p>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="2.4s">
                <div class="center-align thumbnail">
                    <div class="circle">
                        <a href="{{ url('/') }}" style="background-position: -1089px top"></a>
                    </div>
                    <div class=" card-content">
                        <h6><a href="{{ url('/') }}">Web & Mobile Design</a></h6>

                        <p>I am a very simple card. I am good at containing small bits.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col l3 m3 s3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="1.5s">
                <div class="center-align thumbnail">
                    <div class="circle">
                        <a href="{{ url('/') }}" style="background-position: -815px -3px"></a>
                    </div>
                    <div class=" card-content">
                        <h6><a href="{{ url('/') }}">Web & Mobile Design</a></h6>

                        <p>I am a very simple card. I am good at containing small bits.</p>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="1.8s">
                <div class="center-align thumbnail">
                    <div class="circle">
                        <a href="{{ url('/') }}" style="background-position: -412px -3px"></a>
                    </div>
                    <div class=" card-content">
                        <h6><a href="{{ url('/') }}">Web & Mobile Design</a></h6>

                        <p>I am a very simple card. I am good at containing small bits.</p>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="2.1s">
                <div class="center-align thumbnail">
                    <div class="circle">
                        <a href="{{ url('/') }}" style="background-position: -546px -2px"></a>
                    </div>
                    <div class=" card-content">
                        <h6><a href="{{ url('/') }}">Web & Mobile Design</a></h6>

                        <p>I am a very simple card. I am good at containing small bits.</p>
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="2.4s">
                <div class="center-align thumbnail">
                    <div class="circle">
                        <a href="{{ url('/') }}" style="background-position: -275px -2px"></a>
                    </div>
                    <div class="card-content">
                        <h6><a href="{{ url('/') }}">Web & Mobile Design</a></h6>

                        <p>I am a very simple card. I am good at containing small bits.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container content-full center-align">
        <h4 class="grey-text lighten-1" >Projects Recently Delivered</h4>
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="http://www.sculptmedia.co/resources/images/portfolio/promotime-mobile-app/cover.jpg">
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="http://www.sculptmedia.co/resources/images/portfolio/principle-consultants/cover.jpg">
                    <div class="caption left-align">
                        <h3>Left Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="http://www.sculptmedia.co/resources/images/portfolio/carrefour-mobile-app/cover.jpg">
                    <div class="caption right-align">
                        <h3>Right Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="http://www.sculptmedia.co/resources/images/portfolio/idea-art-website/cover.jpg">
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
            </ul>
        </div>
        <a href="" class="more waves-effect waves-light btn-large deep-orange"><i class="mdi-file-cloud right"></i>more</a>
    </div>

    <div class="container content-full center-align" id="clients">
        <h4 class="grey-text lighten-1" style="margin-top: 25px">Some of Our Clients</h4>
        <div class="row deep-orange lighten-4">
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-b wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.6s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
        </div>
        <div class="row deep-orange lighten-4">
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-b wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.6s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
        </div>
        <div class="row deep-orange lighten-4">
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-rb wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
            <div class="col l3 m3 s3 border-b wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.6s">
                <img src="http://www.sculptmedia.co/resources/images/clients/client-unilever-bw.png" style="display: inline;">
            </div>
        </div>

    </div>
    @endsection

@section('body-scripts')
    <script src="{{ elixir("js/app.min.js") }}"></script>
    <script src="{{ elixir("js/index.min.js") }}"></script>
@endsection