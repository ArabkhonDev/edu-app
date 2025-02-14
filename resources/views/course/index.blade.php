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
                <th>duration</th>
                <th>Price</th>
                <th>Bilimalar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $item)
            <tr>
                <td>{{$item->id}}</td>
                {{-- <td>{{$item->language->id}}</td> --}}
                <td>{{$item->name}}</td>
                <td>{{$item->duration}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->knowladge}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layouts.main>