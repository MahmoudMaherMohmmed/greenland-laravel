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
                        <h2>{{ isset($item) ? "تعديل" : "اضافة" }} منتج
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                              action="{{ isset($item) ? route('product.update',$item->id) : route('product.store') }}"
                              method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            @isset($item)
                                <input type="hidden" name="_method" value="PUT"/>
                            @endisset


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_ar">اسم المنتج - ar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="title_ar" type="text" placeholder="اسم المنتج" id="title_ar"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->title_ar : old('title_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_en">اسم المنتج - en
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="title_en" type="text" placeholder="product Title" id="title_en"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->title_en : old('title_en') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_ar">وصف المنتج
                                    - ar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="description_ar" type="text" placeholder="وصف المنتج"
                                           id="description_ar"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->description_ar : old('description_ar') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description_en">وصف المنتج
                                    - en
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="description_en" type="text" placeholder="product Description"
                                           id="description_en"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->description_en : old('description_en') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code">
                                    كود المنتج
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="code" type="text" placeholder="كود المنتج"
                                           id="code"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->code : old('code') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category_id">
                                    قسم المنتج
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    @php $categories = App\Category::all()@endphp
                                    <select name="category_id" class="form-control col-md-9 col-xs-12">
                                        <option value="0">--</option>
                                        @if(isset($categories))
                                            @if($categories != null)
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{$category->id}}" {{isset($item) && $item->category_id==$category->id ? 'selected' : ''}}>{{$category->title_ar}}</option>
                                                @endforeach
                                            @endif
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">
                                    سعر المنتج
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input name="price" type="number" placeholder="سعر المنتج"
                                           id="price"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{ isset($item) ? $item->price : old('price') }}">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12" style="padding-right: 0px;">
                                    @php $currencies = App\Currency::all()@endphp
                                    <select name="currency_id" class="form-control col-md-2 col-xs-12">
                                        <option value="0">--</option>
                                        @if(isset($currencies))
                                            @if($currencies != null)
                                                @foreach($currencies as $currency)
                                                    <option
                                                        value="{{$currency->id}}" {{isset($item) && $item->currency_id==$currency->id ? 'selected' : ''}}>{{$currency->title_en}}</option>
                                                @endforeach
                                            @endif
                                        @endif
                                    </select>
                                </div>
                            </div>

                            @isset($item->image)
                                @if($item->image!=null)
                                    <div class="form-group">
                                        <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <img src="{{ url('files/product',  $item->image ) }}" width="50%">
                                        </div>
                                    </div>
                                @endif
                            @endisset
                            <div class="form-group">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">
                                    صورة المنتج
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input name="image" type="file" placeholder="image" id="image" accept="image/*"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="featured">مميز
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="featured">
                                        <option
                                            value="1" {{ isset($item) && $item->featured == 1 ? "Selected" : "" }}>
                                            مميز
                                        </option>
                                        <option
                                            value="0" {{ isset($item) && $item->featured == 0 ? "Selected" : "" }}>
                                            غير مميز
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">الحالة
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="status">
                                        <option
                                            value="1" {{ isset($item) && $item->status == 1 ? "Selected" : "" }}>
                                            مفعلة
                                        </option>
                                        <option
                                            value="0" {{ isset($item) && $item->status == 0 ? "Selected" : "" }}>غير
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
