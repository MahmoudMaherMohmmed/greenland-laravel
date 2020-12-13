@extends('front.layouts.app')

@section('title') Login @endsection

@section('style')
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

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center"
             style="background-image: url(img/bg-img/24.jpg);">
            <h2>Login</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-12">
                    <div class="row">
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
                                    <h3>Login</h3>

                                    <!-- user errors -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="form-bg" action="{{url('/login')}}" method="post">
                                        <div class="form-group row">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                   required>
                                        </div>
                                        <div class="form-group row">
                                            <input type="password" class="form-control" name="password"
                                                   placeholder="password" required>
                                        </div>
                                        <div class="form-group row">
                                            <button class="btn btn-primary " type="submit"><i
                                                        class="fa fa-paper-plane-o"></i>
                                                Login
                                            </button>
                                        </div>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')@endsection
