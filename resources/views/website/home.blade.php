@extends('website.layouts.app')

@section('title') GreenLand | | Home @endsection

@section('styles') @endsection

@section('content')
    <!----- Company Defination Section ----->
    <section class="CompanyDefination">
        <div class="container">
            <div class="col-md-12">
                <h1 class="section-heading">Our Services</h1>
                <h2 class="section-subheading">GreenLand is an Egyptian Spice Trading Co which offers a huge selection
                    of
                    spices, herbs, seasonings,
                    ingredients and custom blends</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="subsection">
                        <img src="{{asset('website')}}/images/services/1.jpg" width="225px" height="225px"
                             class="img-circle">
                        <h3>Fast Delivery</h3>
                        <p>
                            We offer some of the most competitive pricing schedules compared to other distributors of
                            herbs
                            and spices. On top of that we offer customized and fast delivery services that make us the
                            right
                            choice as your spice supplier.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="subsection">
                        <img src="{{asset('website')}}/images/services/2.jpg" width="225px" height="225px"
                             class="img-circle">
                        <h3>High Quality Products</h3>
                        <p>
                            Egyptian Spice Trading Co. offers a huge selection of spices, herbs, seasonings,
                            ingredients and custom blends that transform any meal into a flavorful masterpiece.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="subsection">
                        <img src="{{asset('website')}}/images/services/3.jpg" width="225px" height="225px"
                             class="img-circle">
                        <h3>Modern Facilities</h3>
                        <p>
                            We are a wholesale company that offers the highest quality of spices, herbs and seeds. Feel
                            free
                            to browse our site, we carry a large selection of herbs, spices, baking and food items.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="subsection">
                        <img src="{{asset('website')}}/images/services/4.jpg" width="225px" height="225px"
                             class="img-circle">
                        <h3>support</h3>
                        <p>
                            We are here for you! <br/>Contact us to find out more about our Services. our professional
                            staff
                            will be happy to answer questions about our specialty products.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Company Defination Section ----->

    <!----- About ----->
    <section class="about" style="background: url({{asset('website')}}/images/section-about-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h2>Welcome to GreenLand</h2>
                    <p class="about-subtitle">A SMALL STORY ABOUT US</p>
                    <div class="aboutData">
                        <p>
                            GreenLand herbs Exporting Company is a worldwide exporting company. It is specialized in
                            exporting all types of herbs, spices, Flowers, and seeds with competitive prices.
                        </p>
                        <p>
                            Over 90% of our product list is being extracted from our farms under our supervision and are
                            self-produced, and being processed and dried in our factories; so this enables us to provide
                            high quality with relatively lower prices. Quality is our sole aim as we could not cut
                            corners
                            upon; nevertheless we are able to provide the competitive price.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- About ----->

    <!----- Our Important Products Section ----->
    @php $featureds = DB::table('products')->where('featured', 1)->where('status', 1)->limit(8)->get()  @endphp
    @if(isset($featureds))
        @if($featureds != null)
            <section class='ourImportantProducts'>
                <div class="container">
                    <div class="row">
                        <h1 class="section-heading">Our most important products</h1>
                        @foreach($featureds as $featured)
                            <div class="col-md-3 col-sm-6 col-xs-12 product">
                                <img src="{{ url('files/product',$featured->image) }}" width="100%"
                                     alt="{{$featured->title_en}}">
                                <p class="subtitle">{{$featured->title_en}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endif
    <!----- Our Important Products Section ----->
@endsection

@section('scripts') @endsection
