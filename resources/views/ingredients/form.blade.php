@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li><span style="color: red">{{ $error }}</span></li>
        @endforeach
    </ul>
@endif

<form action="{{ isset($ingredient) ? route('ingredients.update', ['ingredient' => $ingredient->id]) : route('ingredients.store') }}" method="POST">
    @csrf
    <input name="title" type="text" value="{{ $ingredient->title ?? '' }}"/>
    <input type="submit" value="Сохранить">
</form>
