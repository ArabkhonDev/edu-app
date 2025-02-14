<x-layouts.main>
    <x-slot:title>
        Honalar
    </x-slot>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($languages as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layouts.main>