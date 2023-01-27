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
            <td><p><a href="http://127.0.0.1:8000/orders">{{ $user->orders_count }}</a></p></td>
        </tr>
    @endforeach
</table>
