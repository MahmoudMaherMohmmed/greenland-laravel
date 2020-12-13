<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GreenLand</title>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="{{ asset('control')}}/build/images/favicon.ico" type="image/ico"/>


    <!-- Bootstrap -->
    <link href="{{ asset('control') }}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('control') }}/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('control') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('control') }}/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('control')}}/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('control')}}/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('control')}}/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


    <link href="{{ asset('control')}}/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('control')}}/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href={{ asset('control')}}/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('control')}}/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('control')}}/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{ asset('control')}}/build/css/custom.min.css" rel="stylesheet">

    <style>
        .profile_pic {
            width: 50%;
            margin: 0px auto;
            padding-top: 0px;
            float: none;
        }

        .img-circle.profile_img {
            margin-top: 0px;
        }

        .profile_info {
            text-align: center;
            padding: 10px;
            width: 100%;
            float: none;
        }

        .tile_count {
            margin-bottom: 0px !important;
            padding-bottom: 20px !important;
        }

        .count {
            padding: 5px 0px;
        }

        .right_col_count {
            padding: 10px 20px 0;
            margin-right: 230px;
            background: #f7f7f7;
        }

        div.dataTables_wrapper div.dataTables_filter input {
            width: 100% !important;
            display: block !important;
        }

        @media (max-width: 992px) {
            .right_col_count {
                margin-right: 0px;
            }
        }

        footer {
            background: #f7f7f7 !important;
        }
    </style>
</head>
<body class="nav-md">

<!-- /header content -->
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col hidden-print">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('admin/home') }}" class="site_title"><i class="fa fa-paw"></i>
                        <span>لوحة التحكم </span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{ asset('control')}}/build/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

            @include('admin.layouts.menu')

            <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="تنظیمات">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="خروج" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav hidden-print">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="{{ asset('control')}}/build/images/img.jpg" alt="">
                                {{Auth::user()->name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;">الاعدادات</a></li>
                                <li><a href="javascript:;">تغيير كلمة المرور</a></li>
                                <li><a href="{{url('logout')}}"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- /header content -->

        <!-- page content -->
        <div class="right_col_count" role="main">
            <!-- top tiles -->
            @php $users_count = DB::table('users')->count(); @endphp
            @php $categories_count = DB::table('categories')->count(); @endphp
            @php $products_count = DB::table('products')->count(); @endphp
            @php $certificates_count = DB::table('certificates')->count(); @endphp
            @php $countries_count = DB::table('countries')->count(); @endphp
            @php $currencies_count = DB::table('currencies')->count(); @endphp

            <div class="row tile_count">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user" style="padding-left: 5px;"></i>المستخدمين</span>
                    <div class="count green">{{isset($users_count) && $users_count!=null ? $users_count : 0}}</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o" style="padding-left: 5px;"></i>الاقسام</span>
                    <div class="count green">{{isset($categories_count) && $categories_count!=null ? $categories_count : 0}}</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o" style="padding-left: 5px;"></i>المنتجات</span>
                    <div class="count green">{{isset($products_count) && $products_count!=null ? $products_count : 0}}</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o" style="padding-left: 5px;"></i>الشهادات</span>
                    <div class="count green">{{isset($certificates_count) && $certificates_count!=null ? $certificates_count : 0}}</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o" style="padding-left: 5px;"></i>الدول</span>
                    <div class="count green">{{isset($countries_count) && $countries_count!=null ? $countries_count : 0}}</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o" style="padding-left: 5px;"></i>العملات</span>
                    <div class="count green">{{isset($currencies_count) && $currencies_count!=null ? $currencies_count : 0}}</div>
                </div>
            </div>
            <!-- /top tiles -->

        </div>
        <!-- /page content -->

    @yield('content')

    <!-- footer content -->
        <footer class="hidden-print">
            <div class="pull-left">
                {{--برمجة وتطوير شركة لوج ابس لنظم المعلومات <a--}}
                {{--href="https://log-apps.com">log-apps.com</a>@ {{ date('Y') }}--}}
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<div id="lock_screen">
    <table>
        <tr>
            <td>
                <div class="clock"></div>
                <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
            </td>
        </tr>
    </table>
</div>
<!-- jQuery -->
<script src="{{ asset('control')}}/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
@yield('scripts')
<script src="{{ asset('control')}}/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('control')}}/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('control')}}/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('control')}}/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('control')}}/iCheck/icheck.min.js"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{ asset('control')}}/moment/min/moment.min.js"></script>

<script src="{{ asset('control')}}/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Chart.js -->
<script src="{{ asset('control')}}/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="{{ asset('control')}}/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- gauge.js -->
<script src="{{ asset('control')}}/gauge.js/dist/gauge.min.js"></script>
<!-- Skycons -->
<script src="{{ asset('control')}}/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{ asset('control')}}/Flot/jquery.flot.js"></script>
<script src="{{ asset('control')}}/Flot/jquery.flot.pie.js"></script>
<script src="{{ asset('control')}}/Flot/jquery.flot.time.js"></script>
<script src="{{ asset('control')}}/Flot/jquery.flot.stack.js"></script>
<script src="{{ asset('control')}}/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{ asset('control')}}/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{ asset('control')}}/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{ asset('control')}}/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{ asset('control')}}/DateJS/build/production/date.min.js"></script>
<!-- JQVMap -->
<script src="{{ asset('control')}}/jqvmap/dist/jquery.vmap.js"></script>
<script src="{{ asset('control')}}/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{ asset('control')}}/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>


<!-- Datatables -->
<script src="{{ asset('control')}}/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('control')}}/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="{{ asset('control')}}/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="{{ asset('control')}}/jszip/dist/jszip.min.js"></script>
<script src="{{ asset('control')}}/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('control')}}/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('control')}}/build/js/custom.js"></script>


</body>
</html>
