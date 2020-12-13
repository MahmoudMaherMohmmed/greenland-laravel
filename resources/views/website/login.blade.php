@extends('website.layouts.app')

@section('title') GreenLand | | Login @endsection

@section('styles')
    <style>
        .form-control {
            border: 1px solid rgba(106, 106, 106, 0.64);
            padding: 5px;
            border-radius: 5px;
            height: 40px;
            color: #000;
            font-size: 14px;
        }

        .form-bg {
            background-color: #fafafa;
            border-radius: 5px;
            padding: 50px;
        }
    </style>



@endsection
@section('content')
    <div id="page-banner-area" class="page-banner-area"
         style="background-image:url({{url('files')}}/gallery/1550390174-5.jpeg)">
        <!-- Subpage title start -->
        <div class="page-banner-title">
            <div class="text-center">
                <h2>
                    @if (App::isLocale('en'))
                        Login
                    @elseif (App::isLocale('ar'))
                        تسجيل الدخول
                    @endif
                </h2>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    @if ($errors->any())
                        <div class="alert alert-danger" style="direction: ltr; text-align: left;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('msg'))
                        <div class="alert alert-danger" style="text-align: left;">
                            <ul>
                                <li>{!! Session::get('msg') !!}</li>
                            </ul>
                        </div>
                    @endif
                    <form class="form-bg" action="{{route('login')}}" method="post">
                        <div class="form-group row">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group row">
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="form-group row">
                            <button class="btn btn-primary " type="submit"><i class="fa fa-paper-plane-o"></i>
                                Login
                            </button>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')@endsection
