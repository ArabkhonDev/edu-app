<x-layouts.main>
    <x-slot:title>
        Honalar
    </x-slot>

    <div class="table-responsive">
        <div class="p-2">
            <form action="{{ route('room.store') }}" method="post">
                @csrf
                <b class="px-2">Xona qo'shish</b>
                <input class="outline-none border-none" type="text" value="name">
                <button type="submit" class="btn btn-primary">Qo'shish</button>
            </form>
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
                @foreach ($rooms as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <form action="{{ route('room.edit', ['room'=>$item->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-warning">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('courses.destroy', ['course' => $item->id]) }}" method="post"
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
