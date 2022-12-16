@if (@isset($data) && !@empty($data) && count($data) > 0)

    <table id="example2" class="table table-bordered table-hover">
        <thead class="custom_thead">
            <th class="text-center">الاسم </th>
            <th class="text-center"> رقم الحساب</th>
            <th class="text-center"> النوع</th>
            <th class="text-center"> هل أب</th>
            <th class="text-center"> الحساب الاب</th>
            <th class="text-center"> الرصيد</th>
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
    <div class="col-md-12" id="ajax_pagination_in_search">
        {{ $data->links() }}
    </div>
@else
    <div class="alert alert-danger">
        عفوا لاتوجد بيانات لعرضها !!
    </div>
@endif
