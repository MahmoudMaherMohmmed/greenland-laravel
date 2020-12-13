@extends('website.layouts.app')

@section('title') GreenLand | | Contact @endsection

@section('styles') @endsection

@section('content')
    <!----- ContactUs Section ----->
    <section class="ContactUs">
        <div class="container">
            <!----- Heading ----->
            <div class="row">
                <h1 class="section-heading">Contact Us</h1>
            </div>

            <!----- ContactUs ----->
            <div class="row">
                <!----- ContactUs Info ----->
                <div class="col-md-4 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Minshat Abu Milih, Sumusta
                                <br/>
                                Bani Swief, Egypt.
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-mobile"></i>
                            <p>
                                @if(isset($contact->phone_1) && $contact->phone_1!=null)
                                    {{ $contact->phone_1 }}

                                @endif
                                @if(isset($contact->phone_2) && $contact->phone_2!=null)
                                    <br/>
                                    {{ $contact->phone_2 }}
                                @endif
                                @if(isset($contact->phone_3) && $contact->phone_3!=null)
                                    <br/>
                                    {{ $contact->phone_3 }}
                                @endif
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <p>
                                @if(isset($contact->line) && $contact->line!=null)
                                    {{ $contact->line }}
                                @endif
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-whatsapp"></i>
                            <p>
                                @if(isset($contact->whatsapp) && $contact->whatsapp!=null)
                                    {{ $contact->whatsapp }}
                                @endif
                                @if(isset($contact->whatsapp_2) && $contact->whatsapp_2!=null)
                                    <br/>
                                    {{ $contact->whatsapp_2 }}
                                @endif
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <br/>
                            <a href="{{$contact->email_1}}">{{$contact->email_1}}</a>
                            <br/>
                            <a href="mailto:{{$contact->email_2}}">{{$contact->email_2}}</a>
                            <br/>
                            <a href="mailto:{{$contact->email_3}}">{{$contact->email_3}}</a>
                        </li>
                    </ul>
                </div>
                <!----- ContactUs Form ----->
                <div class="col-md-8">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="styled-input">
                                    <input type="text" name="First name" required="">
                                    <label>Full Name</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="styled-input">
                                    <input type="email" name="Email" required="">
                                    <label>Email</label>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="styled-input">
                                    <input type="text" name="Subject" required="">
                                    <label>Subject</label>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="styled-input">
                                    <textarea name="Message" required=""></textarea>
                                    <label>Message</label>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </form>
                    <div class="text-center">
                        <a class="btn btn-success btn-md btn-lg">Send</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!----- ContactUs Section ----->
@endsection

@section('scripts') @endsection
