@extends('layouts.app')
@section('content')

    <div class="row mt-2">
        <div class="col-6 offset-3">
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h3>Create User</h3>
                @include('users.parts._form')

                <input type="submit" value="Create User" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection