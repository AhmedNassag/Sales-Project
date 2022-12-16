@extends('layouts.admin')

@section('title')
    الموردين
@endsection

@section('contentheader')
    الحسابات
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.accounts.index') }}"> الموردين </a>
@endsection

@section('contentheaderactive')
    عرض
@endsection



@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title card_title_center">بيانات الموردين </h3>
            <input type="hidden" id="token_search" value="{{ csrf_token() }}">
            <input type="hidden" id="ajax_search_url" value="{{ route('admin.supplier.ajax_search') }}">
            <a href="{{ route('admin.supplier.create') }}" class="btn btn-sm btn-success">اضافة جديد</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <input type="radio" checked name="searchbyradio" id="searchbyradio" value="suuplier_code"> برقم المورد
                    <input type="radio" name="searchbyradio" id="searchbyradio" value="account_number"> برقم الحساب
                    <input type="radio" name="searchbyradio" id="searchbyradio" value="name"> بالاسم
                    <input autofocus style="margin-top: 6px !important;" type="text" id="search_by_text" placeholder=" اسم  - رقم الحساب  - كود المرود" class="form-control"> <br>
                </div>
            </div>
            <div class="clearfix"></div>
            <div id="ajax_responce_serarchDiv" class="col-md-12">
                @if (@isset($data) && !@empty($data) && count($data) > 0)
                    <table id="example2" class="table table-bordered table-hover">
                        <thead class="custom_thead">
                            <th class="text-center">الاسم </th>
                            <th class="text-center"> الكود </th>
                            <th class="text-center"> الفئة </th>
                            <th class="text-center"> رقم الحساب </th>
                            <th class="text-center"> الرصيد </th>
                            <th class="text-center"> الهاتف </th>
                            <th class="text-center"> ملاحظات </th>
                            <th class="text-center">حالة التفعيل</th>
                            <th class="text-center">الإجراءات</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $info)
                                <tr>
                                    <td class="text-center">{{ $info->name }}</td>
                                    <td class="text-center">{{ $info->suuplier_code }}</td>
                                    <td class="text-center">{{ $info->suppliers_categories_name }}</td>
                                    <td class="text-center">{{ $info->account_number }}</td>
                                    <td class="text-center">
                                        @if($info->current_balance >0)
                                            مدين ب ({{ $info->current_balance*1 }}) جنيه
                                        @elseif ($info->current_balance <0)
                                            دائن ب ({{ $info->current_balance*1*(-1) }})   جنيه
                                        @else
                                             متزن
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $info->phones }}</td>
                                    <td class="text-center">{{ $info->notes }}</td>
                                    <td @if ($info->active == 1)  class="text-center bg-success" @else class="text-center bg-danger" @endif>
                                        @if ($info->active == 1)
                                            مفعل
                                        @else
                                            معطل
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.supplier.edit', $info->id) }}" class="btn btn-sm  btn-primary">تعديل</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    {{ $data->links() }}
                @else
                    <div class="text-center alert alert-danger">
                        عفوا لاتوجد بيانات لعرضها !!
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('admin/js/suppliers.js') }}"></script>
@endsection
