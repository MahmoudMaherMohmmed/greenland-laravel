<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>الاقسام & المنتجات</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> الاقسام <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/category') }}">الاقسام</a></li>
                    <li><a href="{{ url('admin/category/create') }}">اضافة قسم</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-home"></i> المنتجات <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/product') }}">المنتجات</a></li>
                    <li><a href="{{ url('admin/product/create') }}">اضافة منتج</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="menu_section">
        <h3>اعدادات صفحات الموقع</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> السلايدر <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/slider') }}">السلايدر</a></li>
                    <li><a href="{{ url('admin/slider/create') }}">اضافة سلايد</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-home"></i> الشهادات <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/certificate') }}">الشهادات</a></li>
                    <li><a href="{{ url('admin/certificate/create') }}">اضافة شهادة</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="menu_section">
        <h3>اعدادات عامة</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> اعدادات الموقع <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/setting') }}">اعدادات الموقع</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-home"></i> المستخدمين <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/user') }}">المستخدمين</a></li>
                    <li><a href="{{ url('admin/user/create') }}">اضافة مستخدم جديد</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-home"></i> وسائل الاتصال <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/contact') }}">وسائل الاتصال</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-home"></i> الروابط الاجتماعية <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/sociallink') }}">الروابط الاجتماعية</a></li>
                    <li><a href="{{ url('admin/sociallink/create') }}">اضافة رابط جديد</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-home"></i> الدول <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/country') }}">الدول</a></li>
                    <li><a href="{{ url('admin/country/create') }}">اضافة دولة جديد</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-home"></i> العملات <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('admin/currency') }}">العملات</a></li>
                    <li><a href="{{ url('admin/currency/create') }}">اضافة عملة جديد</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->
