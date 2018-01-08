@extends('layouts.app')

@section('content')
    <section>
        <div class="container has-text-centered">
            <div class="column">
                <div class="box">
                    <table class="table is-fullwidth is-striped is-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Created</th>
                            <th>Deleted</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th> {{ $user->name }}</th>
                                <td> {{ $user->email }} </td>
                                <td> {{ $user->phone }}</td>
                                <td> {{ $user->created_at }}</td>
                                <td> {{ $user->updated_at }}</td>
                                <td><a href="{{ route('users.edit', $user->id) }}">Edit</a> / Delete</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">
                                {{ $users->links() }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
