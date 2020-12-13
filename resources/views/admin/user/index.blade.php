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
        </tr>
      </thead>
      <tbody>
@if ($allusers && count($allusers)> 0 )


        @foreach ($allusers as $item)

        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->wallet}}</td>
        </tr>
        @endforeach
        @endif
      </tbody>
  </table>
@endsection
