<table>
    <tr>
        <th>Email</th>
        <th>Имя</th>
        <th>Количество заказов</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->email }}</td>
            <td>{{ $user->name }}</td>
            <td><p><a href="{{ route('orders', ['user_id' => $user->id]) }}">{{ $user->orders_count }}</a></p></td>
        </tr>
    @endforeach
</table>
