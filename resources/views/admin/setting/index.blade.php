@extends('admin.layouts.app')


@section('content')


    <!-- page content -->
    <div class="right_col" role="main">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @if (Session::has('msg'))
                    <div class="alert alert-info">
                        <ul>
                            <li>{!! Session::get('msg') !!}</li>
                        </ul>
                    </div>
                @endif

                <div class="x_title">
                    <h2>اعدادات الموقع</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                           cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>م</th>
                            <th>اسم الموقع</th>
                            <th>Site Name</th>
                            <th width="25%">اللوجو</th>
                            <th>الحالة</th>
                            <th>التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($items)
                            @if(count($items) > 0)
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title_ar  }}</td>
                                        <td>{{ $item->title_en  }}</td>
                                        <td>
                                            <img src="{{ url('files/logos',$item->logo) }}" width="100%">
                                        </td>
                                        <td>{{ $item->status == 1 ?"مفتوح":"مغلق" }}</td>

                                        <td>
                                            <a class="btn btn-primary" href="javascript:;"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-success"
                                               href="{{ url('admin/setting' , $item->id )}}/edit"><i
                                                    class="fa fa-edit"></i></a>
                                            {{--<form action="{{ route('setting.destroy' , $item->id )}}" method="POST"--}}
                                                  {{--style="display: initial;">--}}
                                                {{--@csrf--}}
                                                {{--<input type="hidden" name="_method" value="DELETE"/>--}}
                                                {{--<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>--}}
                                                {{--</button>--}}
                                            {{--</form>--}}
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                        @endisset
                        </tbody>
                    </table>
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
