<table>
    <tr>
        <th>id</th>
        <th>Юзер</th>
        <th>Товары</th>
        <th>Дата создания</th>
    </tr>
    @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user->name }}</td>
            <td>
                @foreach($order->orderProducts as $orderProduct)
                    {{ $orderProduct->product->name }} / {{ $orderProduct->quantity }}
                    <br>
                @endforeach
            </td>
            <td>{{ $order->created_at->format('d.m.y H:i') }}</td>
        </tr>
    @endforeach
</table>
