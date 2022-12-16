@if (@isset($data) && !@empty($data) && count($data) > 0)
   @php
      $i=1;
   @endphp
   <table id="example2" class="table table-bordered table-hover">
      <thead class="custom_thead">
         <th class="text-center">مسلسل</th>
         <th class="text-center">اسم الخزنة</th>
         <th class="text-center">هل رئيسية</th>
         <th class="text-center">اخر ايصال صرف</th>
         <th class="text-center">اخر ايصال تحصيل</th>
         <th class="text-center">حالة التفعيل</th>
         <th class="text-center">الإجراءات</th>
      </thead>
      <tbody>
         @foreach ($data as $info )
            <tr>
               <td class="text-center">{{ $i }}</td>
               <td class="text-center">{{ $info->name }}</td>
               <td class="text-center">@if($info->is_master==1) رئيسية @else فرعية @endif</td>
               <td class="text-center">{{ $info->last_isal_exhcange }}</td>
               <td class="text-center">{{ $info->last_isal_collect }}</td>
               <td class="text-center">@if($info->active==1) مفعل @else معطل @endif</td>
               <td class="text-center">
                  <a href="{{ route('admin.treasuries.edit',$info->id) }}" class="btn btn-sm  btn-primary">تعديل</a>
                  <button data-id="{{ $info->id }}" class="btn btn-sm  btn-info">المذيد</button>
               </td>
            </tr>
            @php
               $i++;
            @endphp
         @endforeach
      </tbody>
   </table>
   <br>
   <div class="text-center col-md-12" id="ajax_pagination_in_search">
      {{ $data->links() }}
   </div>
@else
   <div class="text-center alert alert-danger">
      عفوا لاتوجد بيانات لعرضها !!
   </div>
@endif
