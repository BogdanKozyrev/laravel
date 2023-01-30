<table style="border-bottom-color: #1a1e21; border-width: 3px">
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
                    <p><b>{{ $orderProduct->product->name }} / {{ $orderProduct->quantity }}</b></p>
                    @foreach($orderProduct->product->productIngredient as $productIngredient)
                        <p>{{ $productIngredient->ingredient->title }} / {{ $productIngredient->ingredient_quantity }}</p>
                    @endforeach
                    <br>
                @endforeach
            </td>
            <td>{{ $order->created_at->format('d.m.y H:i') }}</td>
        </tr>
    @endforeach
</table>
