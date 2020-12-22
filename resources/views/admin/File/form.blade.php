@include('admin.partials.errors')

<form action="" method="POST">

@csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="file_title">عنوان فایل</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" id="file_title" name="file_title" value="{{ old('file_title',isset($fileItem)? $fileItem->file_title: '')}}">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="file_descrition">توضیحات فایل</span>
        <textarea name="file_descrition" class="form-control" id="file_descrition" cols="30" rows="10">
            {{old('email',isset($fileItem)? $fileItem->file_descrition: '')}}
        </textarea>

    </div>

   

    <div>
        <button class="btn btn-success" type="submit">ذخیره اطلاعات</button>
    </div>



</form>
