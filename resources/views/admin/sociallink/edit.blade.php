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
                        <h2>{{ isset($item) ? "تعديل الرابط الاجتماعى" : "اضافة رابط اجتماعى جديد" }}
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                              action="{{ isset($item) ? route('sociallink.update',$item->id) : route('sociallink.store') }}"
                              method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            @isset($item)
                                <input type="hidden" name="_method" value="PUT"/>
                            @endisset

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="icon">ايقونة الرابط
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="icon" type="text" placeholder="ايقونة الرابط"
                                           id="icon"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->icon : old('icon') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link">الرابط الجتماعى
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="link" type="text" placeholder="الرابط الجتماعى" id="link"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->link : old('link') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="color">لون الرابط الجتماعى
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="color" type="text" placeholder="لون الرابط الجتماعى" id="color"
                                           class="form-control"
                                           value="{{ isset($item) ? $item->color : old('color') }}">
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
