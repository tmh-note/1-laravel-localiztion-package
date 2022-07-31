<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User List
        </h2>
    </x-slot>

    <table class="table-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->toFormattedDateString() }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="100%">No user.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
</x-app-layout>


  