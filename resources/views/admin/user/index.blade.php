@extends('layouts.admin')


@section('content')

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
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
  </table>
@endsection
