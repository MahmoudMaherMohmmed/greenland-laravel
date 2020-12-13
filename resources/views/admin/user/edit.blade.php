@extends('admin.layouts.app')


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
                        <h2>{{ isset($item) ? "تعديل" : "اضافة" }} مستخدم
                            <small>{{ isset($item) ? $item->name : "جديد" }}</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            <li><a href="{{ url("admin/user/create") }}" class="btn btn-primary">اضافة مستخدم</a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                              action="{{ isset($item) ? route('user.update',$item->id) : route('user.store') }}"
                              method="post">
                            {{ csrf_field() }}

                            @isset($item)
                                <input type="hidden" name="_method" value="PUT"/>
                            @endisset

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">اسم المستخدم
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="username" type="text" placeholder="اسم المستخدم" id="username"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->username : old('username') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">الاسم الاول
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="firstname" type="text" placeholder="الاسم الاول" id="firstname"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->firstname : old('firstname') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">الاسم الثانى
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="lastname" type="text" placeholder="الاسم الثانى" id="lastname"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->lastname : old('lastname') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">البريد
                                    الالكتروني
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="email" type="email" placeholder="البريد الالكتروني" id="email"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->email : old('email') }}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">رقم الهاتف
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="phone" type="number" placeholder="رقم الهاتف" id="phone"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->phone : old('phone') }}">

                                </div>
                            </div>

                            @if(!isset($item))
                                <div class="form-group">
                                    <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">
                                        كلمة المرور
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input name="password" type="password" placeholder="كلمة المرور" id="password"
                                               class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation"
                                           class="control-label col-md-3 col-sm-3 col-xs-12">
                                        تاكيد كلمة المرور
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input name="password_confirmation" type="password" placeholder="كلمة المرور"
                                               id="password_confirmation"
                                               class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">الحالة
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="status">
                                        <option
                                            value="1" {{ isset($item) && $item->status == 1 ? "Selected" : "" }}>
                                            مفعل
                                        </option>
                                        <option
                                            value="0" {{ isset($item) && $item->status == 0 ? "Selected" : "" }}>غير
                                            مفعل
                                        </option>
                                    </select>
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
@endsection
