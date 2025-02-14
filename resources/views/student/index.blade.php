<x-layouts.main>
    <x-slot:title>
        Student
    </x-slot>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ismi</th>
                <th>Familyasi</th>
                <th>Emaili</th>
                <th>Addresi</th>
                <th>Telefoni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->lastname}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->phone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layouts.main>