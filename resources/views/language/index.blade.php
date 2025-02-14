<x-layouts.main>
    <x-slot:title>
        Honalar
    </x-slot>

    <div class="table-responsive">
        <div class="p-2">
            <a href="{{ route('language.create') }}" class="btn btn-primary">Til qo'shish</a>
        </div>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>O'zgartirish</th>
                    <th>O'chirish</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($languages as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <form action="{{ route('language.edit', ['language'=>$item->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-warning">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('language.destroy', ['language' => $item->id]) }}" method="post"
                                class="mx-2" onsubmit="return confirm('kursni o\'chirishga ishonchingiz komilmi?')">
                                @method('delete')
                                @csrf<button type="submit" class="btn btn-dark">O'chirish</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.main>
