<x-layouts.main>
    <x-slot:title>
        Grupalar
    </x-slot>
    <div class="table-responsive">
    <div class="p-2">
        <a href="{{route('group.create')}}" class="btn btn-primary">Gurux qo'shish</a>
    </div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Yo'nalish</th>
                <th>Name</th>
                <th>Teacher</th>
                <th>Xonalar</th>
                <th>Bosqich</th>
                <th>Boshlanish vaqti</th>
                <th>Tugash vaqti</th>
                <td>O'zgartirish</td>
                <td>O'chirish</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $item)
            <tr>
                <td><a href="{{route('group.show', ['group'=> $item->id])}}">{{$item->id}}</a></td>
                <td>{{$item->course->name}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->teacher->username}}</td>
                <td>{{$item->room_id}}</td>
                <td>{{$item->stage->title}}</td>
                <td>{{$item->start_time}}</td>
                <td>{{$item->end_time}}</td>
                <td>
                    <form action="{{ route('group.edit', ['group'=> $item->id]) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning">edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('group.destroy', ['group' => $item->id]) }}" method="post"
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