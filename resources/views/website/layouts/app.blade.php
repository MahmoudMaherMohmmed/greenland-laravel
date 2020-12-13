@php $setting = DB::table('settings')->where('status', 1)->first() @endphp
@php $categories = DB::table('categories')->where('status', 1)->get() @endphp
        <!DOCTYPE html>

<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel='shortcut icon' href='{{asset('website')}}/images/favicon.png' type='image/x-icon'>
    <link rel='icon' href='{{asset('website')}}/images/favicon.png' type='image/x-icon'>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('website')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('website')}}/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('website')}}/css/main-style.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('website')}}/css/loading.css" rel="stylesheet" type="text/css"/>
    @yield('styles')
</head>
<body style="overflow: hidden;">

<!----- Start Section Loading ----->
<section class="loading-overlay">
    <div class="loader"></div>
    <img src="{{$setting!=null ? url('files/logos',$setting->logo) : asset('website/images/logo.png')}}"/>
</section>
<!----- End Section Loading ----->

<!----- Header ----->
<!----- Navigation ----->
<nav class="navbar navbar-fixed-top" role="navigation" id="mainNav">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}"><img
                    src="{{$setting!=null ? url('files/logos',$setting->logo) : asset('website/images/logo.png')}}"><span>{{$setting!=null ? $setting->title_en : 'GreenLand'}}</span></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="{{url('/about')}}">About Us</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Products <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @if(isset($categories))
                        @if($categories != null)
                            @foreach($categories as $category)
                                <li><a href="{{url('/products',$category->id)}}">{{$category->{getTran("title")} }}</a>
                                </li>
                            @endforeach
                        @endif
                    @endif
                </ul>
            </li>
            <li><a href="{{url('/certificate')}}">Certificates</a></li>
            <li><a href="{{url('/contact')}}">Contact Us</a></li>
        </ul>
    </div>
</nav>
<!----- Navigation ----->

<!----- carousel ----->
@php $sliders = DB::table('sliders')->where('status', 1)->get() @endphp
@if(isset($sliders))
    @if($sliders != null)
        @php $counter = 0 @endphp
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    <div class="item {{$counter == 0 ? 'active' : ''}}">
                        <image src="{{url('files/slider',$slider->image) }}" width="100%"/>
                    </div>
                    @php $counter++ @endphp
                @endforeach
            </div>
        </div>
    @endif
@endif
<!----- carousel ----->
<!----- Header ----->

@yield('content')

<!----- Footer ----->
<footer>
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-element">
                        <h3>About</h3>
                        <hr>
                        <p class="aboutCompany">Our company is following the sanitary procedures as well as quality
                            assurance system, to assure that our products don`t exceed the minimum acceptable account of
                            bacteria & without any pathogenic.</p>
                        <p class="aboutCompany"> We are in a good position to supply you with all your needs from herbs
                            & seeds & spices.</p>
                        <p class="aboutCompany">The quality of our products, customer satisfaction, punctual delivery,
                            and high service within and after delivery are our highest priorities, we strive to provide
                            impeccable customer service and superior quality botanical products</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-element">
                        <h3>Quick Links</h3>
                        <hr>
                        <ul>
                            <li><a href="{{url('/')}}"> Home </a></li>
                            <li><a href="{{url('/about')}}"> About Us </a></li>
                            <li><a href="{{url('/certificate')}}"> Certificates </a></li>
                            <li><a href="{{url('/contact')}}"> Contact Us </a></li>
                        </ul>
                    </div>
                </div>
                @php $contact = DB::table('contacts')->first() @endphp
                <div class="col-md-6">
                    <div class="footer-element">
                        <h3>Contact Us</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-center">Egypt Office</h4>
                                <hr style="margin: 0px 25px;">
                                @if(isset($contact))
                                    @if($contact != null)
                                        <div class="info-element">
                                            <i class="fa fa-map-marker"></i>
                                            <div class="contact-right">
                                                <p>Address</p><span class="spanup">Minshat Abu Milih, Sumusta </span>
                                                <br/>
                                                <span class="spanup">Bani Swief, Egypt.</span>
                                            </div>
                                        </div>
                                        <div class="info-element">
                                            <i class="fa fa-mobile"></i>
                                            <div class="contact-right">
                                                <p>Mobile</p>
                                                @isset($contact->phone_1)
                                                    <span class="spanup">{{ $contact->phone_1 }}</span>
                                                    <br/>
                                                @endisset
                                                @isset($contact->phone_2)
                                                    <span class="spanup">{{ $contact->phone_2 }}</span>
                                                    <br/>
                                                @endisset
                                                @isset($contact->phone_3)
                                                    <span class="spanup">{{ $contact->phone_3 }}</span>
                                                @endisset
                                            </div>
                                        </div>
                                        @isset($contact->line)
                                            <div class="info-element">
                                                <i class="fa fa-phone"></i>
                                                <div class="contact-right">
                                                    <p>Phone</p>
                                                    <span class="spanup">{{ $contact->line }}</span>
                                                </div>
                                            </div>
                                        @endif
                                        @isset($contact->whatsapp)
                                            <div class="info-element">
                                                <i class="fa fa-whatsapp"></i>
                                                <div class="contact-right">
                                                    <p>Whatsapp</p>
                                                    <span class="spanup">{{ $contact->whatsapp }}</span>
                                                    @if(isset($contact->whatsapp_2) && $contact->whatsapp_2!=null)
                                                        <br/>
                                                        <span class="spanup">{{ $contact->whatsapp_2 }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        @endisset
                                        <div class="info-element">
                                            <i class="fa fa-envelope"></i>
                                            <div class="contact-right">
                                                <p>Email</p>
                                                @isset($contact->email_1)
                                                    <a href="mailto:{{$contact->email_1}}">{{$contact->email_1}}</a>
                                                    <br/>
                                                @endisset
                                                @isset($contact->email_2)
                                                    <a href="mailto:{{$contact->email_2}}">{{$contact->email_2}}</a>
                                                    <br/>
                                                @endisset
                                                @isset($contact->email_3)
                                                    <a href="mailto:{{$contact->email_3}}" style="font-size: 12px;">{{$contact->email_3}}</a>
                                                    <br/>
                                                @endisset
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-center">Russian Office</h4>
                                <hr style="margin: 0px 25px;">
                                @if(isset($contact))
                                    @if($contact != null)
                                        <div class="info-element">
                                            <i class="fa fa-map-marker"></i>
                                            <div class="contact-right">
                                                <p>Address</p><span class="spanup">119034 Г. Москва, </span>
                                                <br/>
                                                <span class="spanup">ул Зубовский  Б-р д4 3 этаж, Russian.</span>
                                            </div>
                                        </div>
                                        <div class="info-element">
                                            <i class="fa fa-mobile"></i>
                                            <div class="contact-right">
                                                <p>Mobile</p>
                                                <span class="spanup">+7 9260660198</span>
                                                <br/>
                                                <span class="spanup">+7 9777226171</span>
                                            </div>
                                        </div>
                                        <div class="info-element">
                                            <i class="fa fa-whatsapp"></i>
                                            <div class="contact-right">
                                                <p>Whatsapp</p>
                                                <span class="spanup">+7 9260660198</span>
                                                <br/>
                                                <span class="spanup">+7 9777226171</span>
                                            </div>
                                        </div>
                                        <div class="info-element">
                                            <i class="fa fa-envelope"></i>
                                            <div class="contact-right">
                                                <p>Email</p>
                                                <a href="mailto:hanywell@greenland-eg.com">hanywell@greenland-eg.com</a>
                                                <br/>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-12 copyrights">
                    All Rights Reserved &copy; GreenLand 2017 &nbsp; | &nbsp; <a href="#">Privacy Statement</a> &nbsp; |
                    &nbsp; <a href="#">Terms Of Use</a>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 text-center">
                    @php $sociallinks = DB::table('social_links')->where('status',1)->get() @endphp
                    @if(isset($sociallinks))
                        @if($sociallinks != null)
                            <div class="socialmedia">
                                <ul class="list-inline">
                                    @foreach($sociallinks as $sociallink)
                                        <li class="list-inline-item">
                                            <a class="btn-social" href="{{$sociallink->link}}">
                                                <i class="{{$sociallink->icon}}"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
<!----- Footer ----->

<script src="{{asset('website')}}/js/jquery.js"></script>
<script src="{{asset('website')}}/js/popper.min.js"></script>
<script src="{{asset('website')}}/js/bootstrap.js"></script>
<script src="{{asset('website')}}/js/plugins.js"></script>
@yield('scripts')
</body>
</html>
