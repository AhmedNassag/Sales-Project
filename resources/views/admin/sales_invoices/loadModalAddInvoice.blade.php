<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label> تاريخ الفاتورة</label>
            <input type="date" name="invoice_date" class="form-control" value="@php echo date("Y-m-d"); @endphp">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label> هل يوجد عميل</label>
            <select name="is_has_customer" id="is_has_customer" class="form-control">
                <option value="1" selected> نعم عميل</option>
                <option value="0"> لايوجد عميل( طياري )</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>
                بيانات العملاء
                (<a title=" اضافة عميل جديد " href="#">جديد <i class="fa fa-plus-circle  "></i> </a>)
            </label>
            <select name="customer_code" id="customer_code" class="form-control select2">
                <option value=""> لايوجد عميل</option>
                @if (@isset($customers) && !@empty($customers))
                    @foreach ($customers as $info)
                        <option value="{{ $info->customer_code }}"> {{ $info->name }} </option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label> بيانات المناديب</label>
            <select name="customer_code" id="customer_code" class="form-control select2">
                <option value=""> اختر المندوب</option>
                @if (@isset($customers) && !@empty($customers))
                    @foreach ($customers as $info)
                        <option value="{{ $info->customer_code }}"> {{ $info->name }} </option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<hr style="border:1px solid #3c8dbc;">
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label> نوع البيع</label>
            <select name="customer_code" id="customer_code" class="form-control select2">
                <option value="1">قطاعي</option>
                <option value="2">نص جملة</option>
                <option value="3">جملة</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label> بيانات الاصناف</label>
            <select id="item_code" class="form-control select2" style="width: 100%;">
                <option value="">اختر الصنف</option>
                @if (@isset($item_cards) && !@empty($item_cards))
                    @foreach ($item_cards as $info)
                        <option data-item_type="{{ $info->item_type }}" value="{{ $info->item_code }}">
                            {{ $info->name }}
                        </option>
                    @endforeach
                @endif
            </select>
            @error('suuplier_code')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <!--  الوحدات للصنف-->
    <div class="col-md-4" style="display: none;" id="UomDiv">

    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label>الكمية</label>
            <input oninput="this.value=this.value.replace(/[^0-9.]/g,'');" name="item_quantity" id="item_quantity" class="form-control" value="1">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label> السعر</label>
            <input oninput="this.value=this.value.replace(/[^0-9.]/g,'');" name="item_quantity" id="item_quantity" class="form-control" value="">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label> هل بيع عادي</label>
            <select name="is_normal_orOther" id="is_normal_orOther" class="form-control ">
                <option value="1">عادي</option>
                <option value="2">بونص </option>
                <option value="3">دعاية</option>
                <option value="4">هالك</option>
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label> الاجمالي</label>
            <input readonly oninput="this.value=this.value.replace(/[^0-9.]/g,'');" name="item_total" id="item_total" class="form-control" value="">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <button style="margin-top:35px" class="btn btn-sm btn-danger" id="AddItemToIvoiceDetailsRow">أضف للفاتورة</button>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<hr style="border:1px solid #3c8dbc;">
<div class="row">
    <div class="col-md-12">
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
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
