<table>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Дата создания</th>
        <th>Дата изменения</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ number_format($product->price, 2, '.', ' ') }}</td>
            <td>{{ $product->created_at->format('d.m.y H:i') }}</td>
            <td>{{ $product->updated_at->format('d.m.y H:i') }}</td>
        </tr>
    @endforeach
</table>
