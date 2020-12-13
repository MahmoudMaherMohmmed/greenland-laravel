@extends('website.layouts.app')

@section('title') GreenLand | | products @endsection

@section('styles') @endsection

@section('content')
    <!----- Our Important Products Section ----->
    <section class='ourImportantProducts'>
        <div class="container">
            <div class="row">
                @if(isset($products))
                    @if(count($products))
                        <h2 class="heading">
                            Our {{DB::table('categories')->where('id',$products[0]->category_id)->value('title_en')}}</h2>
                        @foreach($products as $product)
                            <div class="col-md-3 col-sm-6 col-xs-12 ">
                                <img src="{{url('files/product',$product->image)}}" width="100%" height="150px">
                                <p class="subtitle">{{$product->title_en}}</p>
                            </div>
                        @endforeach
                    @else
                        <h4 style="margin: 100px auto;"> No Available Products In This Category Now </h4>
                    @endif
                @endif
            </div>
        </div>
    </section>
    <!----- Our Important Products Section ----->
@endsection

@section('scripts') @endsection
