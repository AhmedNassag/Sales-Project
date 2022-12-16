@extends('layouts.admin')
@section('title')
    الحسابات
@endsection

@section('contentheader')
    الحسابات المالية
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.accounts.index') }}"> الحسابات المالية </a>
@endsection

@section('contentheaderactive')
    عرض
@endsection



@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title card_title_center">بيانات الحسابات المالية (الشجرة المحاسبية)</h3>
            <input type="hidden" id="token_search" value="{{ csrf_token() }}">
            <input type="hidden" id="ajax_search_url" value="{{ route('admin.accounts.ajax_search') }}">
            <a href="{{ route('admin.accounts.create') }}" class="btn btn-sm btn-success">اضافة جديد</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <input type="radio" checked name="searchbyradio" id="searchbyradio" value="account_number"> برقم الحساب
                    <input type="radio" name="searchbyradio" id="searchbyradio" value="name"> بالاسم
                    <input style="margin-top: 6px !important;" type="text" id="search_by_text" placeholder=" اسم  - رقم الحساب" class="form-control"> <br>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label> بحث بنوع الحساب</label>
                        <select name="account_type_search" id="account_type_search" class="form-control ">
                            <option value="all"> بحث بالكل</option>
                            @if (@isset($account_types) && !@empty($account_types))
                                @foreach ($account_types as $info)
                                    <option value="{{ $info->id }}"> {{ $info->name }} </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label> هل الحساب أب</label>
                        <select name="is_parent_search" id="is_parent_search" class="form-control">
                            <option value="all"> بحث بالكل</option>
                            <option value="1"> نعم</option>
                            <option value="0"> لا</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>حالة التفعيل</label>
                        <select name="active_search" id="active_search" class="form-control">
                            <option value="all">بحث بالكل</option>
                            <option value="1">مفعل</option>
                            <option value="0">معطل ومؤرشف</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div id="ajax_responce_serarchDiv" class="col-md-12">
                @if (@isset($data) && !@empty($data) && count($data) > 0)
                    <table id="example2" class="table table-bordered table-hover">
                        <thead class="custom_thead">
                            <th class="text-center">الاسم</th>
                            <th class="text-center">رقم الحساب</th>
                            <th class="text-center">النوع</th>
                            <th class="text-center">هل أب</th>
                            <th class="text-center">الحساب الاب</th>
                            <th class="text-center">الرصيد</th>
                            <th class="text-center">حالة التفعيل</th>
                            <th class="text-center">الإجراءات</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $info)
                                <tr>
                                    <td class="text-center">{{ $info->name }}</td>
                                    <td class="text-center">{{ $info->account_number }}</td>
                                    <td class="text-center">{{ $info->account_types_name }}</td>
                                    <td class="text-center">
                                        @if ($info->is_parent == 1)
                                            نعم
                                        @else
                                            لا
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $info->parent_account_name }}</td>
                                    <td class="text-center">
                                        @if($info->is_parent == 0)
                                            @if ($info->current_balance > 0)
                                                مدين ب ( {{ $info->current_balance * 1 }} ) جنيه
                                            @elseif ($info->current_balance < 0)
                                                دائن ب ( {{ $info->current_balance * 1 * (-1) }} )جنيه
                                            @else
                                                متزن
                                            @endif
                                        @else
                                            راجع ميزان المراجعة
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($info->active == 1)
                                            مفعل
                                        @else
                                            معطل
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($info->relatediternalaccounts == 0)
                                            <a href="{{ route('admin.accounts.edit', $info->id) }}" class="btn btn-sm  btn-primary">تعديل</a>
                                        @else
                                            يتم تعديله من شاشته
                                        @endif
                                    </td>
                                </tr>
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

@endsection

@section('script')
    <script src="{{ asset('admin/js/accounts.js') }}"></script>
@endsection
