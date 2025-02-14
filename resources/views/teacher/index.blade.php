<x-layouts.main>
    <x-slot:title>
        Teacher
    </x-slot>

    <div class="table-responsive">
        <div class="p-2">
            <a href="{{ route('teacher.create') }}" class="btn btn-primary">Teacher qo'shish</a>
        </div>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Ismi</th>
                    <th>Familyasi</th>
                    <th>Emaili</th>
                    <th>Addresi</th>
                    <th>Sohasi</th>
                    <th>Telefoni</th>
                    <th>O'zgartish</th>
                    <th>O'chirish</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $item)
                    <tr>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->lastname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->professional }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <form action="{{ route('teacher.edit', ['teacher'=>$item->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-warning">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('teacher.destroy', ['teacher' => $item->id]) }}" method="post"
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
