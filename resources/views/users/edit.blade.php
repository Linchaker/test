@extends('layouts.app')
@section('content')

    <div class="row mt-2">
        <div class="col-6 offset-3">
            <form action="{{route('user.update', ['user' => $user->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h3>Edit user</h3>
                @include('users.parts._form')

                <input type="submit" value="Update user" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection