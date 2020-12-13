@extends('admin.layouts.app')

<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    @if ($errors->any())
                        <div class="alert alert-danger" style="direction: ltr;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('msg'))
                        <div class="alert alert-info">
                            <ul>
                                <li>{!! Session::get('msg') !!}</li>
                            </ul>
                        </div>
                    @endif

                    <div class="x_title">
                        <h2>{{ isset($item) ? "تعديل بيانات وسائل الاتصال" : "اضافة وسيلة اتصال" }}
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                              action="{{ isset($item) ? route('contact.update',$item->id) : route('contact.store') }}"
                              method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            @isset($item)
                                <input type="hidden" name="_method" value="PUT"/>
                            @endisset

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_ar">العنوان - ar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="address_ar" type="text" placeholder="العنوان" id="address_ar"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->address_ar : old('address_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address_en">العنوان - en
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="address_en" type="text" placeholder="العنوان" id="address_en"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->address_en : old('address_en') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_1">البريد
                                    الالكترونى
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="email_1" type="email" placeholder="البريد الالكترونى" id="email_1"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->email_1 : old('email_1') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_2">البريد
                                    الالكترونى</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="email_2" type="email" placeholder="البريد الالكترونى" id="email_2"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->email_2 : old('email_2') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_3">البريد
                                    الالكترونى</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="email_3" type="email" placeholder="البريد الالكترونى" id="email_3"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->email_3 : old('email_3') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_1">رقم
                                    التليفون
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="phone_1" type="text" placeholder="رقم التليفون" id="phone_1"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->phone_1 : old('phone_1') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_2">رقم
                                    التليفون
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="phone_2" type="text" placeholder="رقم التليفون" id="phone_2"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->phone_2 : old('phone_2') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_3">رقم
                                    التليفون
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="phone_3" type="text" placeholder="رقم التليفون" id="phone_3"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->phone_3 : old('phone_3') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="line">
                                    رقم التليفون الارضى
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="line" type="text" placeholder="رقم التليفون الارضى" id="line"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->line : old('line') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="whatsapp">
                                    Whatsapp Number
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="whatsapp" type="text" placeholder="Whatsapp Number" id="whatsapp"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->whatsapp : old('whatsapp') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="whatsapp_2">
                                    Whatsapp Number
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="whatsapp_2" type="text" placeholder="Whatsapp Number" id="whatsapp_2"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->whatsapp_2 : old('whatsapp_2') }}">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">حفظ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('content_ar');
    </script>
    <script>
        CKEDITOR.replace('content_en');
    </script>
@endsection
