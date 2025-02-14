<x-layouts.main>
    <x-slot:title>
        Talaba {{$student->username}} 
    </x-slot>
<div>
    <h1>Talaba email {{$student->email}}</h1>
    <h1>Talaba ismi {{$student->username}}</h1>
    <h1>Talaba familyasi {{$student->name}}</h1>
    <h1>Talaba telefoni {{$student->phone}}</h1>
    <h1>Talaba manzili {{$student->address}}</h1>
</div>

</x-layouts.main>