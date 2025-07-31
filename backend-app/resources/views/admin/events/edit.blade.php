@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Event</h2>

    <form action="{{ route('admin.events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.events.form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
