<x-layouts.main>
    <x-slot:title>
        Talaba {{$teacher->username}} 
    </x-slot>
<div>
    <h1>Talaba email {{$teacher->email}}</h1>
    <h1>Talaba ismi {{$teacher->username}}</h1>
    <h1>Talaba familyasi {{$teacher->name}}</h1>
    <h1>Talaba telefoni {{$teacher->phone}}</h1>
    <h1>Talaba manzili {{$teacher->address}}</h1>
    <h1>Talaba sohasi {{$teacher->professional}}</h1>
</div>

</x-layouts.main>