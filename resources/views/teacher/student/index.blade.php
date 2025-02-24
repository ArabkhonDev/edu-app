<x-layouts.main>
    <x-slot:title>
        Student
    </x-slot>

    <div class="table-responsive">
        <div class="p-2">
            <a href="{{ route('student.create') }}" class="btn btn-primary">Student qo'shish</a>
        </div>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ismi</th>
                    <th>Familyasi</th>
                    <th>Emaili</th>
                    <th>Addresi</th>
                    <th>Telefoni</th>
                    <th>O'zgartish</th>
                    <th>O'chirish</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $item)
                    <tr>
                        <td><a href="{{ route('student.show', ['student' => $item->id]) }}">{{ $item->id }}</a></td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->lastname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <form action="{{ route('student.edit', ['student'=> $item->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-warning">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('student.destroy', ['student' => $item->id]) }}" method="post"
                                class="mx-2" onsubmit="return confirm('kursni o\'chirishga ishonchingiz komilmi?')">
                                @method('delete')
                                @csrf<button type="submit" class="btn btn-dark">O'chirish</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{$students->links()}} --}}
    </div>

</x-layouts.main>
