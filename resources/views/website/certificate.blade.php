@extends('website.layouts.app')

@section('title') GreenLand | | Certificate @endsection

@section('styles')
    <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
    <style>
        .demo-gallery > ul {
            margin-bottom: 0;
        }

        .demo-gallery > ul > li {
            margin-bottom: 50px;
        }

        .demo-gallery > ul > li a {
            border: 3px solid #FFF;
            border-radius: 3px;
            display: block;
            overflow: hidden;
            position: relative;
            float: left;
        }

        .demo-gallery > ul > li a > img {
            -webkit-transition: -webkit-transform 0.15s ease 0s;
            -moz-transition: -moz-transform 0.15s ease 0s;
            -o-transition: -o-transform 0.15s ease 0s;
            transition: transform 0.15s ease 0s;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            height: 100%;
            width: 100%;
        }

        .demo-gallery > ul > li a:hover > img {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
            opacity: 1;
        }

        .demo-gallery > ul > li a .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: background-color 0.15s ease 0s;
            -o-transition: background-color 0.15s ease 0s;
            transition: background-color 0.15s ease 0s;
        }

        .demo-gallery > ul > li a .demo-gallery-poster > img {
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            opacity: 0;
            position: absolute;
            top: 50%;
            -webkit-transition: opacity 0.3s ease 0s;
            -o-transition: opacity 0.3s ease 0s;
            transition: opacity 0.3s ease 0s;
        }

        .demo-gallery > ul > li a:hover .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .demo-gallery .justified-gallery > a > img {
            -webkit-transition: -webkit-transform 0.15s ease 0s;
            -moz-transition: -moz-transform 0.15s ease 0s;
            -o-transition: -o-transform 0.15s ease 0s;
            transition: transform 0.15s ease 0s;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            height: 100%;
            width: 100%;
        }

        .demo-gallery .justified-gallery > a:hover > img {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
            opacity: 1;
        }

        .demo-gallery .justified-gallery > a .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: background-color 0.15s ease 0s;
            -o-transition: background-color 0.15s ease 0s;
            transition: background-color 0.15s ease 0s;
        }

        .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            opacity: 0;
            position: absolute;
            top: 50%;
            -webkit-transition: opacity 0.3s ease 0s;
            -o-transition: opacity 0.3s ease 0s;
            transition: opacity 0.3s ease 0s;
        }

        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .demo-gallery .video .demo-gallery-poster img {
            height: 48px;
            margin-left: -24px;
            margin-top: -24px;
            opacity: 0.8;
            width: 48px;
        }

        .demo-gallery.dark > ul > li a {
            border: 3px solid #04070a;
        }

        .heading {
            text-align: center;
            padding: 25px 0px 50px;
        }
    </style>
@endsection

@section('content')
    <!----- Company Certificates ----->
    <section class="companycertificates">
        <div class="container">
            <div class="row">
                <h2 class="heading">Our Certifications</h2>

                @if(isset($certificates) && $certificates!=null && count($certificates)>0)
                    <div class="demo-gallery">
                        <ul id="lightgallery" class="list-unstyled">
                            @foreach($certificates as $certificate)
                                <li class="col-lg-4 col-md-4 col-xs-6 col-sm-6"
                                    data-responsive="{{url('files/certificate',$certificate->certificate)}}"
                                    data-src="{{url('files/certificate',$certificate->certificate)}}"
                                    data-sub-html="<h4>{{$certificate->title_en}}</h4>"
                                    data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                                    <a href="">
                                        <img class="img-responsive"
                                             src="{{url('files/certificate',$certificate->certificate)}}"
                                             alt="{{$certificate->title_en}}">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-----Company Certificates ----->
@endsection

@section('scripts')
    <script src="{{asset('website')}}/js/gallery/lightgallery.js"></script>
    <script src="{{asset('website')}}/js/gallery/lg-zoom.js"></script>
    <script src="{{asset('website')}}/js/gallery/lg-thumbnail.js"></script>
    <script src="{{asset('website')}}/js/gallery/lg-share.js"></script>
    <script src="{{asset('website')}}/js/gallery/lg-pager.js"></script>
    <script src="{{asset('website')}}/js/gallery/lg-hash.js"></script>
    <script src="{{asset('website')}}/js/gallery/lg-fullscreen.js"></script>
    <script src="{{asset('website')}}/js/gallery/lg-autoplay.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>
@endsection
