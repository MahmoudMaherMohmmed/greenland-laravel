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
                        <h2>{{ isset($item) ? "تعديل" : "اضافة" }} دولة
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                              action="{{ isset($item) ? route('country.update',$item->id) : route('country.store') }}"
                              method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            @isset($item)
                                <input type="hidden" name="_method" value="PUT"/>
                            @endisset


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_ar">اسم الدولة - ar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="name_ar" type="text" placeholder="اسم الدولة" id="name_ar"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->name_ar : old('name_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_en">اسم الدولة - en
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="name_en" type="text" placeholder="Country Name" id="name_en"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->name_en : old('name_en') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sortname_ar">اختصار الدولة
                                    - ar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="sortname_ar" type="text" placeholder="اختصار الدولة" id="sortname_ar"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->sortname_ar : old('sortname_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sortname_en">اختصار الدولة
                                    - en
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="sortname_en" type="text" placeholder="Sort Name"
                                           id="sortname_en"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->sortname_en : old('sortname_en') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phonecode">
                                    Phone Code
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="phonecode" type="text" placeholder="phonecode"
                                           id="phonecode"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->phonecode : old('phonecode') }}">
                                </div>
                            </div>

                            @if(isset($item->flag))
                                @if(count($item->flag)>0)
                                    <div class="form-group">
                                        <label for="flag" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <img src="{{ url('files/country',$item->flag) }}" width="50%">
                                        </div>
                                    </div>
                                @endif
                            @endif

                            <div class="form-group">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">
                                    صورة العلم
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="flag" type="file" placeholder="flag" id="flag" accept="image/*"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">الحالة
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
