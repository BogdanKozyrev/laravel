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
            <td>{{ $user->orders_count }}</td>
        </tr>
    @endforeach
</table>
