@include('admin.partials.errors')

<form action="" method="POST" >

@csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="plan_title">عنوان طرح</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="plan_title" name="plan_title" value="{{ old('plan_title',isset($planItem)? $planItem->plan_title: '')}}">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="plan_limit_download_count">محدودیت دانلود روزانه</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="plan_limit_download_count" name="plan_limit_download_count" value="{{ old('plan_limit_download_count',isset($planItem)? $planItem->plan_limit_download_count: '')}}">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="plan_price">قیمت</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="plan_price" name="plan_price" value="{{ old('plan_price',isset($planItem)? $planItem->plan_price: '')}}">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="plan_days_count">تعداد روز اعتبار</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="plan_days_count" name="plan_days_count" value="{{ old('plan_days_count',isset($planItem)? $planItem->plan_days_count: '')}}">
    </div>

    <div>
        <button class="btn btn-success" type="submit">ذخیره اطلاعات</button>
    </div>



</form>
