@extends('layouts.admin')

@section('title')
    الضبط العام
@endsection

@section('contentheader')
    المخازن
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.stores.index') }}"> المخازن </a>
@endsection

@section('contentheaderactive')
    عرض
@endsection



@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title card_title_center">بيانات المخازن</h3>
                    <input type="hidden" id="token_search" value="{{ csrf_token() }}">
                    <input type="hidden" id="ajax_search_url" value="{{ route('admin.treasuries.ajax_search') }}">
                    <a href="{{ route('admin.stores.create') }}" class="btn btn-sm btn-success">اضافة جديد</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="ajax_responce_serarchDiv">
                        @if (@isset($data) && !@empty($data))
                            @php
                                $i = 1;
                            @endphp
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="custom_thead">
                                    <th class="text-center">مسلسل</th>
                                    <th class="text-center">اسم المخزن</th>
                                    <th class="text-center"> الهاتف</th>
                                    <th class="text-center"> العنوان</th>
                                    <th class="text-center">حالة التفعيل</th>
                                    <th class="text-center"> تاريخ الاضافة</th>
                                    <th class="text-center"> تاريخ التحديث</th>
                                    <th class="text-center">الإجراءات</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $info)
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td class="text-center">{{ $info->name }}</td>
                                            <td class="text-center">{{ $info->phone }}</td>
                                            <td class="text-center">{{ $info->address }}</td>
                                            <td class="text-center">
                                                @if ($info->active == 1)
                                                    مفعل
                                                @else
                                                    معطل
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @php
                                                    $dt = new DateTime($info->created_at);
                                                    $date = $dt->format('Y-m-d');
                                                    $time = $dt->format('h:i');
                                                    $newDateTime = date('A', strtotime($time));
                                                    $newDateTimeType = $newDateTime == 'AM' ? 'صباحا ' : 'مساء';
                                                @endphp
                                                {{ $date }} <br>
                                                {{ $time }}
                                                {{ $newDateTimeType }} <br>
                                                بواسطة
                                                {{ $info->added_by_admin }}
                                            </td>
                                            <td class="text-center">
                                                @if ($info->updated_by > 0 and $info->updated_by != null)
                                                    @php
                                                        $dt = new DateTime($info->updated_at);
                                                        $date = $dt->format('Y-m-d');
                                                        $time = $dt->format('h:i');
                                                        $newDateTime = date('A', strtotime($time));
                                                        $newDateTimeType = $newDateTime == 'AM' ? 'صباحا ' : 'مساء';
                                                    @endphp
                                                    {{ $date }} <br>
                                                    {{ $time }}
                                                    {{ $newDateTimeType }} <br>
                                                    بواسطة
                                                    {{ $info->updated_by_admin }}
                                                @else
                                                    لا يوجد تحديث
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.stores.edit', $info->id) }}" class="btn btn-sm  btn-primary">تعديل</a>
                                                <a href="{{ route('admin.stores.delete', $info->id) }}" class="btn btn-sm are_you_shue  btn-danger">حذف</a>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach



                                </tbody>
                            </table>
                            <br>
                            {{ $data->links() }}
                        @else
                            <div class="alert alert-danger">
                                عفوا لاتوجد بيانات لعرضها !!
                            </div>
                        @endif

                    </div>





                </div>
            </div>
        </div>
    </div>





@endsection

@section('script')
    <script src="{{ asset('assets/admin/js/treasuries.js') }}"></script>
@endsection
