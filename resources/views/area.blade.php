@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Special Area
                    </div>
                    <div class="card-body">

                        <a class="js_create btn btn-success" href="{{ route('createLink', ['']) }}">Create new link</a>
                        <a class="js_deactivate btn btn-danger" data-link="{{ $link }}" href="{{ route('deactivateLink') }}">Deactivate link</a>
                        <a class="js_play btn btn-primary" href="{{ route('play') }}">I'm feeling lucky</a>
                        <a class="js_history btn btn-secondary" href="{{ route('history') }}">History</a>

                        <div class="js_answer mt-3"></div>

                        <table class="table table-bordered col-6 offset-3 js_table d-none">
                            <thead>
                            <tr>
                                <th scope="col">Points</th>
                                <th scope="col">Status</th>
                                <th scope="col">Prize</th>
                            </tr>
                            </thead>
                            <tbody class="results">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
