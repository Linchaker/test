@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-6 offset-3">
            <a class="btn btn-primary" href="{{route('user.create')}}">Create User</a>
        </div>

    </div>
    <div class="row mt-2">

            <div class="col-12">
                <table class="table table-bordered col-6 offset-3">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-primary">Show user</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-6 offset-3">
                {{$users->links() }}
            </div>
    </div>


@endsection