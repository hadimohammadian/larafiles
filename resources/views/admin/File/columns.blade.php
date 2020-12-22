<tr>
    <th scope="row">{{ $item->file_id }}</th>
    <td>{{ $item->file_title }}</td>
    <td>{{ $item->file_type }}</td>
    <td>{{ $item->file_size}}</td>
    <td>{{ $item->file_name}}</td>

    <td style="text-align: center">
        @include('admin.user.operation')
    </td>
  </tr>
