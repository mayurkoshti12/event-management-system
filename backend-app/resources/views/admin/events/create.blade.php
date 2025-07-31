@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Event</h2>

    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf
        @include('admin.events.form')
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection

