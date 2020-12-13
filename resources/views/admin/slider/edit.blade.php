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
                        <h2>{{ isset($item) ? "تعديل" : "اضافة" }} سلايد
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                              action="{{ isset($item) ? route('slider.update',$item->id) : route('slider.store') }}"
                              method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            @isset($item)
                                <input type="hidden" name="_method" value="PUT"/>
                            @endisset


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_ar">عنوان الاسليدر -
                                    ar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="title_ar" type="text" placeholder="اسم السلايد" id="title_ar"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->title_ar : old('title_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_en">عنوان الاسليدر -
                                    en
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="title_en" type="text" placeholder="Slid Name" id="title_en"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->title_en : old('title_en') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content_ar">محتوى الاسليدر
                                    - ar
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="content_ar" type="text" placeholder="محتوى السلايد" id="content_ar"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->content_ar : old('content_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content_en">محتوى الاسليدر
                                    - en
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="content_en" type="text" placeholder="Slid Content" id="content_en"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->content_en : old('content_en') }}">
                                </div>
                            </div>

                            @isset($item)
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <img src="{{ url('files/slider',  $item->image ) }}" width="50%">
                                    </div>
                                </div>
                            @endisset
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                                    صورة الاسليدر
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="image" type="file" placeholder="image" id="image" accept="image/*"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">الحالة
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="status">
                                        <option value="1" {{ isset($item) && $item->status == 1 ? "Selected" : "" }}>
                                            مفعلة
                                        </option>
                                        <option value="0" {{ isset($item) && $item->status == 0 ? "Selected" : "" }}>غير
                                            مفعلة
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
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
