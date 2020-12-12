@include('admin.partials.errors')

<form action="" method="POST">

@csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="name">نام کامل</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="name" name="name">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">ایمیل</span>
        <input type="email" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="email" name="email">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">کلمه عبور</span>
        <input type="password" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="password" name="password">
    </div>


    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect02">نقش کاربری</label>
        <select class="form-control " id="role" name="role">
            <option selected>انتخاب ...</option>
            <option value="1">مدیر</option>
            <option value="2">اپراتور</option>
            <option value="3">کاربر عادی</option>
        </select>

    </div>



    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">موجودی کیف پول</span>
        <span class="input-group-text">تومان</span>
        <input type="number" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="wallet" name="wallet">
    </div>


    <div>
        <button class="btn btn-success" type="submit">ذخیره اطلاعات</button>
    </div>



</form>
