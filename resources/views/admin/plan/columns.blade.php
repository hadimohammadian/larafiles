<tr>
    <th scope="row">{{ $item->plan_id }}</th>
    <td>{{ $item->plan_title }}</td>
    <td>{{ $item->plan_limit_download_count }}</td>
    <td>{{ $item->plan_price }}</td>
    <td>{{ $item->plan_days_count }}</td>

    <td style="text-align: center">
        @include('admin.plan.operations')
    </td>
</tr>
