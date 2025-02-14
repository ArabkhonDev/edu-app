<x-layouts.main>
    <x-slot:title>
        Grupalar
    </x-slot>

<div class="table-responsive">
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
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->course->name}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->teacher->username}}</td>
                <td>{{$item->room->name}}</td>
                <td>{{$item->stage->title}}</td>
                <td>{{$item->start_time}}</td>
                <td>{{$item->end_time}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layouts.main>