<x-layouts.main>
    <x-slot:title>
        {{$room->name}} Grupasi
    </x-slot>
<div>
    <h1>Gruppa nomi {{$room->name}}</h1>
    <p>O'qtuvchi: {{$group->teacher->username}} - {{$group->teacher->lastname}}</p>
    {{-- <p>Hona: {{$group->room->name}}</p> --}}
    <p>O'qtuvchi tel nomeri: <a href="tel:{{$group->teacher->phone}}">{{$group->teacher->phone}}</a></p>
    <p>o'qtuvchi sohasi: {{$group->teacher->professional}}</p>
    <p>Yo'nalish: {{$group->course->name}}</p>
    <p>O'qish muddati: {{$group->course->duration}} oy</p>
    <p>Nimalar o'rgatiladi: {{$group->course->knowladge}}</p>
</div>

</x-layouts.main>