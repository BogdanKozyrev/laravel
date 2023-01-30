@if (session('message'))
    <h3 style="color: green">{{ session('message') }}</h3>
@endif

<table>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Изменить</th>
        <th>Удалить</th>
    </tr>
    @foreach($ingredients as $ingredient)
        <tr>
            <td>{{ $ingredient->id }}</td>
            <td>{{ $ingredient->title }}</td>
            <td><a href="{{ route('ingredients.edit', ['ingredient' => $ingredient->id]) }}">Изменить</a></td>
            <td>
                <form action="{{ route('ingredients.delete', ['ingredient' => $ingredient->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    @endforeach
</table>

<a href="{{ route('ingredients.create') }}">Создание ингридиента</a>
