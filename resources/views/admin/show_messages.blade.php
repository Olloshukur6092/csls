@extends('layouts.admin_app')
@section('title')
    Admin | Messages
@endsection
@section('content')
    <div class="container my-4">
        <div class="card-card-body shadow-lg border-0">

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Messages</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->number }}</td>
                            <td>{{ $message->message }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
