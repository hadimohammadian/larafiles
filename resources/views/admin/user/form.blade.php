@include('admin.partials.errors')

<form action="" method="POST">

@csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="name">نام کامل</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="name" name="name" value="{{ old('name',isset($userItem)? $userItem->name: '')}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">ایمیل</span>
        <input type="email" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="email" name="email"
             value="{{old('email',isset($userItem)? $userItem->email: '')}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">کلمه عبور</span>
        <input type="password" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="password" name="password" value="{{old('password')}}">
    </div>


    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect02">نقش کاربری</label>
        <select class="form-control " id="role" name="role" >
            <option selected>انتخاب ...</option>
            <option value="1" {{ isset($userItem) && $userItem->role == 1 ? 'selected' : '' }}>مدیر</option>
            <option value="2" {{ isset($userItem) && $userItem->role == 2 ? 'selected' : '' }}>اپراتور</option>
            <option value="3" {{ isset($userItem) && $userItem->role == 3 ? 'selected' : '' }}>کاربر عادی</option>
        </select>

    </div>



    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">موجودی کیف پول</span>
        <span class="input-group-text">تومان</span>
        <input type="number" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="wallet" name="wallet" value="{{ old('wallet',isset($userItem)? $userItem->wallet: 0) }}">
    </div>


    <div>
        <button class="btn btn-success" type="submit">ذخیره اطلاعات</button>
    </div>



</form>
