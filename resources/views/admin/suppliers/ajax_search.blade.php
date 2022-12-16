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
    <div class="col-md-12" id="ajax_pagination_in_search">
        {{ $data->links() }}
    </div>
@else
    <div class="alert alert-danger">
        عفوا لاتوجد بيانات لعرضها !!
    </div>
@endif
