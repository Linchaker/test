@extends('layouts.app')
@section('content')

    <div class="row mt-2">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header"><h2>User</h2></div>
                <div class="card-body">
                    <div>Name: {{$user->name}}</div>
                    <div>Phone: {{$user->phone}}</div>
                    <div>Created: {{$user->created_at->diffForHumans()}}</div>
                    <div class="card-btn">
                        <a href="{{route('user.index')}}" class="mr-2 btn btn-secondary float-right">Back</a>
                        <a href="{{route('user.edit', ['user' => $user->id])}}" class="mr-2 btn btn-info float-right">Edit</a>
                        <form action="{{route('user.destroy', ['user' => $user->id])}}" method="post" enctype="multipart/form-data"
                              onsubmit="if (confirm('Really delete?')) {return true} else {return false}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="mr-2 btn btn-danger float-right" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection