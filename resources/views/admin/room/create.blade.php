<x-layouts.main>
    <x-slot:title>
        Create Course
    </x-slot>

    <div class="container w-25 border rounded">
        <form action="{{ route('group.store') }}" method="POST" class="py-3 " enctype="multipart/form-data">
            @csrf
            <h3>Gruppa  yarating</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="title"
                    value="{{ old('name') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="time" class="form-control " name="start_time" placeholder="boshlanish vaqti"
                    value="{{ old('start_time') }}">
                @error('start_time')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="time" class="form-control " name="end_time" placeholder="tuagsh vaqti"
                    value="{{ old('end_time') }}">
                @error('end_time')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
           
            <button type="submit" name="created" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-layouts.main>
