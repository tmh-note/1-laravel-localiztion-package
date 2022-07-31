@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-10">
            <table class="table">
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

            {{-- {{ $users->links() }} --}}
        </div>
    </div>
</div>


@stop