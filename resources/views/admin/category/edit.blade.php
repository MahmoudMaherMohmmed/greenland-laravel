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
                        <h2>{{ isset($item) ? "تعديل" : "اضافة" }} قسم
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                              action="{{ isset($item) ? route('category.update',$item->id) : route('category.store') }}"
                              method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            @isset($item)
                                <input type="hidden" name="_method" value="PUT"/>
                            @endisset


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_ar">اسم القسم - ar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="title_ar" type="text" placeholder="اسم القسم" id="title_ar"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->title_ar : old('title_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_en">اسم القسم - en
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="title_en" type="text" placeholder="Category Name" id="title_en"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->title_en : old('title_en') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_ar">وصف القسم
                                    - ar
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="description_ar" type="text" placeholder="وصف القسم" id="description_ar"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->description_ar : old('description_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_en">وصف القسم
                                    - en
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="description_en" type="text" placeholder="Category Description"
                                           id="description_en"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->description_en : old('description_en') }}">
                                </div>
                            </div>

                            @if(isset($item->image))
                                @if($item->image!=null)
                                    <div class="form-group">
                                        <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <img src="{{ url('files/category',$item->image) }}" width="50%">
                                        </div>
                                    </div>
                                @endif
                            @endif

                            <div class="form-group">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">
                                    صورة القسم
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="image" type="file" placeholder="image" id="image" accept="image/*"
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
