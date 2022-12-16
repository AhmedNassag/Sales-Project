@if (@isset($data) && !@empty($data) && count($data) > 0)
    @if ($mirror['searchByBalanceStatus'] != 3)
        <table style="width: 95%; margin: 0 auto;" id="example2" class="table table-bordered table-hover">
            <thead style="background-color: gray" class="custom_thead">
                @if ($mirror['searchByBalanceStatus'] == 2)
                    <th class="text-center">اجمالي المستحق تحصيله من المناديب</th>
                @elseif($mirror['searchByBalanceStatus'] == 1)
                    <th class="text-center">اجمالي المتسحق صرفه المناديب</th>
                @else
                    <th class="text-center">اجمالي المستحق تحصيله من المناديب</th>
                    <th class="text-center">اجمالي المتسحق صرفه المناديب</th>
                    <th class="text-center"> الصافي</th>
                @endif
            </thead>
            <tbody>
                <tr>
                    @if ($mirror['searchByBalanceStatus'] == 2)
                        <td class="text-center">{{ $mirror['debit_sum'] * 1 }} جنيه</td>
                    @elseif($mirror['searchByBalanceStatus'] == 1)
                        <td class="text-center">{{ $mirror['credit_sum'] * 1 * -1 }} جنيه </td>
                    @else
                        <td class="text-center">{{ $mirror['debit_sum'] * 1 }} جنيه</td>
                        <td class="text-center">{{ $mirror['credit_sum'] * 1 * -1 }} جنيه</td>
                        <td class="text-center">
                            @if ($mirror['net'] > 0)
                                مبلغ مستحق علي المناديب بقمية ({{ $mirror['net'] * 1 }} جنيه)
                            @elseif($mirror['net'] < 0)
                                مبلغ مستحق للمناديب بقمية ({{ $mirror['net'] * 1 * -1 }} جنيه)
                            @else
                                اتزان (0)
                            @endif
                        </td>
                    @endif
                </tr>
            </tbody>
        </table>
    @endif
    <hr>
    <table id="example2" class="table table-bordered table-hover">
        <thead class="custom_thead">
            <th class="text-center">الاسم</th>
            <th class="text-center">الكود</th>
            <th class="text-center">رقم الحساب</th>
            <th class="text-center">الرصيد</th>
            <th class="text-center">الهاتف</th>
            <th class="text-center">التفعيل</th>
            <th class="text-center">الإجراءات</th>
        </thead>
        <tbody>
            @foreach ($data as $info)
                <tr>
                    <td class="text-center">{{ $info->name }}</td>
                    <td class="text-center">{{ $info->delegate_code }}</td>
                    <td class="text-center">{{ $info->account_number }}</td>
                    <td class="text-center">
                        @if ($info->current_balance > 0)
                            مدين ب ({{ $info->current_balance * 1 }}) جنيه
                        @elseif ($info->current_balance < 0)
                            دائن ب ({{ $info->current_balance * 1 * -1 }}) جنيه
                        @else
                            متزن
                        @endif
                    </td>
                    <td class="text-center">{{ $info->phones }}</td>
                    <td @if ($info->active == 1) class="text-center bg-success" @else class="text-center bg-danger" @endif>
                        @if ($info->active == 1)
                            مفعل
                        @else
                            معطل
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.delegates.edit', $info->id) }}" class="btn btn-sm  btn-primary">تعديل</a>
                        <button data-id="{{ $info->id }}" class="btn btn-sm show_more_details  btn-info">المزيد</button>
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
