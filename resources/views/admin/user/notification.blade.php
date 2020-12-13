@if(session('success'))

<div class="alert alert-success" role="alert">
    <strong>کاربر جدید با موفقیت ثبت گردید</strong>
</div>


@endif

@if(session('deleted'))

<div class="alert alert-danger" role="alert">
    <strong>کاربر با موفقیت حذف گردید</strong>
</div>


@endif
