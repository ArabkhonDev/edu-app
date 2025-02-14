<x-layouts.main>
    <x-slot:title>
        Yo'nalishalr
    </x-slot>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                {{-- <th>Language</th> --}}
                <th>name</th>
                <th>duration(month)</th>
                <th>1marta tolov</th>
                <th>2-mart tolov</th>
                <th>Oyma -oy</th>
                <th>Bilimalar</th>
                <th>O'zgartirish"</th>
                <th>O'chirish</th>
            </tr>
            <div class="p-2">
                <a href="{{route('course.create')}}" class="btn btn-primary">Kurs qo'shish</a>
            </div>
        </thead>
        <tbody>
            @foreach ($courses as $item)
            <tr>
                <td><a href="{{route('course.show', ['course'=> $item->id])}}">{{$item->id}}</a></td>
                <td>{{$item->name}}</td>
                <td>{{$item->duration}}</td>
                <td>{{$item->price}}$</td>
                <td>{{$item->price}} / 2 * 1.2</td>
                <td>{{$item->price}} / {{$item->duration}} * 1.2</td>
                <td>{{$item->knowladge}}</td>
                <td><form action="{{ route('courses.destroy', ['course' => $item->id]) }}" method="post"
                    class="mx-2" onsubmit="return confirm('kursni o\'chirishga ishonchingiz komilmi?')">
                    @method('delete')
                    @csrf<button type="submit" class="btn btn-dark">O'chirish</button>
                </form></td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    {{-- <a href="{{route('course.edit')}}" class="btn btn-warning">Edit</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layouts.main>