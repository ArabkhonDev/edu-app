<x-layouts.main>
    <x-slot:title>
        Create Course
    </x-slot>

    <div class="container w-25 border rounded">
        <form action="{{ route('course.store') }}" method="POST" class="py-3 " enctype="multipart/form-data">
            @csrf
            <h3>Kurs  yarating</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="title"
                    value="{{ old('name') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <h3>Tilni tanlang</h3>
               <select name="language_id" id="" multiple>
                <option value="1">Uzbek</option>
                <option value="2">English</option>
                <option value="3">Rus tili</option>
                <option value="4">German tili</option>
                <option value="5">Koreya</option>
               </select>
                @error('language_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="duration" placeholder="duration"
                    value="{{ old('duration') }}">
                @error('duration')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" class="form-control " name="price" placeholder="price"
                    value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                    <textarea name="knowladge" id="" cols=61" rows="10" value="{{ old('photo') }}"></textarea>
                @error('knowladge')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" name="created" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-layouts.main>
