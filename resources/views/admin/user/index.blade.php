@extends('layouts.admin')


@section('content')
@include('admin.user.notification')

<table class="table table-hover">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">نام</th>
          <th scope="col">نام خانوادگی</th>
          <th scope="col">متن</th>
          <th scope="col">عملیات</th>
        </tr>
      </thead>
      <tbody>
@if ($allusers && count($allusers)> 0 )


        @foreach ($allusers as $item)
        @include('admin.user.item',$item)

        @endforeach
        @endif
      </tbody>
  </table>
@endsection
