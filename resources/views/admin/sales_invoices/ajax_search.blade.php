@if (@isset($data) && !@empty($data) && count($data) > 0)
    @php
        $i = 1;
    @endphp
    <table id="example2" class="table table-bordered table-hover">
        <thead class="custom_thead">
            <th class="text-center">كود</th>
            <th class="text-center">تاريخ الفاتورة</th>
            <th class="text-center">العميل</th>
            <th class="text-center">فئة الفاتورة</th>
            <th class="text-center">نوع الفاتورة</th>
            <th class="text-center">اجمالي الفاتورة</th>
            <th class="text-center">حالة الفاتورة</th>
            <th class="text-center">الإجراءات</th>
        </thead>
        <tbody>
            @foreach ($data as $info)
                <tr>
                    <td class="text-center">{{ $info->auto_serial }}</td>
                    <td class="text-center">{{ $info->invoice_date }}</td>
                    <td class="text-center">{{ $info->customer_name }}</td>
                    <td class="text-center">{{ $info->Sales_matrial_types_name }}</td>
                    <td class="text-center">
                        @if ($info->pill_type == 1)
                            كاش
                        @elseif($info->pill_type == 2)
                            اجل
                        @else
                            غير محدد
                        @endif
                    </td>
                    <td class="text-center">{{ $info->total_cost * 1 }}</td>
                    <td class="text-center">
                        @if ($info->is_approved == 1)
                            معتمدة
                        @else
                            مفتوحة
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($info->is_approved == 0)
                            <button data-autoserial="{{ $info->auto_serial }}" class="btn btn-sm load_invoice_update_modal btn-primary">تعديل</button>
                            <a href="{{ route('admin.SalesInvoices.delete', $info->id) }}" class="btn btn-sm are_you_shue  btn-danger">حذف</a>
                        @endif
                        <button data-autoserial="{{ $info->auto_serial }}" class="btn btn-sm load_invoice_details_modal btn-info">عرض</button>
                        <a style="font-size: .875rem; padding: 0.25rem 0.5rem;color:white" target="_blank" href="{{ route('admin.SalesInvoices.printsaleswina4', [$info->id, 'A4']) }}" class="btn btn-primary btn-xs"> WA4</a>
                        <a style="font-size: .875rem; padding: 0.25rem 0.5rem;color:white" target="_blank" href="{{ route('admin.SalesInvoices.printsaleswina4', [$info->id, 'A6']) }}" class="btn btn-warning btn-xs"> WA6</a>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
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
