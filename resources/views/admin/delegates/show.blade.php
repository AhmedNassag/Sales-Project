<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title card_title_center"> المزيد</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (@isset($data) && !@empty($data))
                    <table id="example2" class="table table-bordered table-hover">
                        <tr>
                            <td class="text-center width30"> نوع عمولة المندوب</td>
                            <td class="text-center">
                                @if ($data['percent_type'] == 1)
                                    اجر ثابت
                                @else
                                    نسبة
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center width30"> عمولة المندوب بالمبيعات قطاعي</td>
                            <td class="text-center"> {{ $data['percent_salaes_commission_kataei'] * 1 }}</td>
                        </tr>
                        <tr>
                            <td class="text-center width30"> عمولة المندوب بالمبيعات نص الجملة</td>
                            <td class="text-center"> {{ $data['percent_salaes_commission_nosjomla'] * 1 }}</td>
                        </tr>
                        <tr>
                            <td class="text-center width30"> عمولة المندوب بالمبيعات الجملة</td>
                            <td class="text-center"> {{ $data['percent_salaes_commission_jomla'] * 1 }}</td>
                        </tr>
                        <tr>
                            <td class="text-center width30">عمولة المندوب بتحصيل الآجل</td>
                            <td class="text-center"> {{ $data['percent_collect_commission'] * 1 }}</td>
                        </tr>
                        <tr>
                            <td class="text-center width30">عنوان المندوب</td>
                            <td class="text-center"> {{ $data['address'] }}</td>
                        </tr>
                        <tr>
                            <td class="text-center width30">هاتف المندوب</td>
                            <td class="text-center"> {{ $data['phones'] }}</td>
                        </tr>
                        <tr>
                            <td class="text-center width30"> الملاحظات</td>
                            <td class="text-center"> {{ $data['notes'] }}</td>
                        </tr>
                        <tr>
                            <td class="text-center width30"> حالة التفعيل</td>
                            <td class="text-center">
                                @if ($data['active'] == 1)
                                    مفعل
                                @else
                                    معطل
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center width30"> تاريخ الاضافة</td>
                            <td class="text-center">
                                @php
                                    $dt = new DateTime($data['created_at']);
                                    $date = $dt->format('Y-m-d');
                                    $time = $dt->format('h:i');
                                    $newDateTime = date('A', strtotime($time));
                                    $newDateTimeType = $newDateTime == 'AM' ? 'صباحا ' : 'مساء';
                                @endphp
                                {{ $date }}
                                {{ $time }}
                                {{ $newDateTimeType }}
                                بواسطة
                                {{ $data['added_by_admin'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center width30"> تاريخ اخر تحديث</td>
                            <td class="text-center">
                                @if ($data['updated_by'] > 0 and $data['updated_by'] != null)
                                    @php
                                        $dt = new DateTime($data['updated_at']);
                                        $date = $dt->format('Y-m-d');
                                        $time = $dt->format('h:i');
                                        $newDateTime = date('A', strtotime($time));
                                        $newDateTimeType = $newDateTime == 'AM' ? 'صباحا ' : 'مساء';
                                    @endphp
                                    {{ $date }}
                                    {{ $time }}
                                    {{ $newDateTimeType }}
                                    بواسطة
                                    {{ $data['updated_by_admin'] }}
                                @else
                                    لايوجد تحديث
                                @endif
                                <a href="{{ route('admin.adminPanelSetting.edit') }}" class="btn btn-sm btn-success">تعديل</a>
                            </td>
                        </tr>
                    </table>
                @else
                    <div class="text-center alert alert-danger">
                        عفوا لاتوجد بيانات لعرضها !!
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
