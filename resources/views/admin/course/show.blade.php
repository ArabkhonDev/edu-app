<x-layouts.main>
    <x-slot:title>
        {{$course->name}} Grupasi
    </x-slot>
<div>
    <p>Kurs: {{$course->id}}</p>
    <h1>Gruppa nomi {{$course->name}}</h1>
    <p>Yo'nalish: {{$course->name}}</p>
    <p>O'qish muddati: {{$course->duration}} oy</p>
    <p>Nimalar o'rgatiladi: {{$course->knowladge}}</p>
</div>

</x-layouts.main>