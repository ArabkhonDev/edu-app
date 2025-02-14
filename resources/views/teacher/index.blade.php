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
                    {{-- <th>Tajribasi</th> --}}
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
                        {{-- <tr>
                    <td>{{$item->staj->firma_name}}</td>
                    <td>{{$item->staj->title}}</td>
                    <td>{{$item->staj->duration}}</td>
                    <td>{{$item->staj->desc}}</td>
                </tr> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.main>
