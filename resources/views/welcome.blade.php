<x-guest-layout>

    <div class="container-fluid">
        <div class="row">
            <main role="main" class="w-100">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">O'quvchilar oxirgi oy reytingi</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Ismi Familfasi</th>
                                <th>teleforni</th>
                                <th>email</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->role_id == 3)
                                    <tr>
                                        {{-- <td>{{ $user->id }}</td> --}}
                                        <td>{{ $user->username }} - {{ $user->lastname }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address }}</td>
                                @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}   
                </div>
            </main>
        </div>
    </div>
</x-guest-layout>
