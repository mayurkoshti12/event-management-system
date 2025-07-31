@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Event List</h2>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">Add New Event</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date & Time</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->date }} {{ $event->time }}</td>
                <td>{{ $event->location }}</td>
                <td>
                    <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this event?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $events->links() }}
</div>
@endsection
