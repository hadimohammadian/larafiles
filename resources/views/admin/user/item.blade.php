<tr>
    <th scope="row">{{ $item->id }}</th>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->wallet}}</td>
    <td style="text-align: center">
        @include('admin.user.operation')
    </td>
  </tr>
