@extends('layouts.app')

@section('title', 'Items in First-Aid Kit')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Items in First-Aid Kit</h1>
    <form method="GET" action="{{ route('items.index') }}">
        <div class="form-group">
            <input type="text" name="query" class="form-control" placeholder="Search items" value="{{ $query ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <form method="POST" action="{{ route('items.update', $item->id) }}" class="d-inline-block">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="text" name="name" value="{{ $item->name }}">
                            <input type="text" name="description" value="{{ $item->description }}">
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                        <form method="POST" action="{{ route('items.destroy', $item->id) }}" class="d-inline-block">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
