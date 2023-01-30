<table>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Состав</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>
                @foreach($product->productIngredient as $productCourier)
                    {{ $productCourier->ingredient->title }} / {{ $productCourier->ingredient_quantity }} <br>
                    @foreach($productCourier->ingredient->couriers as $courier)
                        {{ $courier->name }}
                    @endforeach
                @endforeach
            </td>
        </tr>
    @endforeach
</table>
