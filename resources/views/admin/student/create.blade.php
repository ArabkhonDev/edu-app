<x-layouts.main>
    <x-slot:title>
        Create Student
    </x-slot>

    <div class="container w-25 border rounded">
        <form action="{{ route('student.store') }}" method="POST" class="py-3 " enctype="multipart/form-data">
            @csrf
            <h3>Student  yarating</h3>
            <div class="form-group">
                <input type="email" class="form-control " name="email" placeholder="Student email"
                    value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control " name="password" placeholder="password"
                    value="{{ old('password') }}">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="username" placeholder="username"
                    value="{{ old('username') }}">
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control " name="lastname" placeholder="lastname"
                    value="{{ old('lastname') }}">
                @error('lastname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" class="form-control " name="phone" value="+998" placeholder="+998"
                    value="{{ old('phone') }}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <textarea rows="5" cols="5" class="form-control" name="address" placeholder="address"
                    value="{{ old('address') }}"></textarea>
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
           
            <button type="submit" name="created" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-layouts.main>
