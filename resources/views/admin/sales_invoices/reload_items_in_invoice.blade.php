<h3 class="card-title card_title_center"> الاصناف المضافة علي الفاتورة </h3>
<table id="example2" class="table table-bordered table-hover">
    <thead class="custom_thead">
        <th class="text-center">المخزن</th>
        <th class="text-center">نوع البيع</th>
        <th class="text-center">الصنف</th>
        <th class="text-center">وحدة البيع</th>
        <th class="text-center">سعر الوحدة</th>
        <th class="text-center">الكمية</th>
        <th class="text-center">الاجمالي</th>
        <th class="text-center">الإجراءات</th>
    </thead>
    <tbody id="itemsrowtableContainterBody">
        @if (!@empty($sales_invoices_details))
            @foreach ($sales_invoices_details as $info)
                <tr>
                    <td class="text-center">
                        {{ $info->store_name }}
                        <input type="hidden" name="item_total_array[]" class="item_total_array" value="{{ $info->total_price }}">
                    </td>
                    <td class="text-center">
                        @if ($info->sales_item_type == 1)
                            قطاعي
                        @elseif($info->sales_item_type == 2)
                            نص جملة
                        @elseif($info->sales_item_type == 3)
                            جملة
                        @else
                            لم يحدد
                        @endif
                    </td>
                    <td class="text-center">{{ $info->item_name }}</td>
                    <td class="text-center">{{ $info->uom_name }}</td>
                    <td class="text-center">{{ $info->unit_price * 1 }}</td>
                    <td class="text-center">{{ $info->quantity * 1 }}</td>
                    <td class="text-center">{{ $info->total_price * 1 }}</td>
                    <td class="text-center">
                        <button data-id="{{ $info->id }}" class="btn are_you_shue remove_active_row_item btn-sm btn-danger">حذف</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
