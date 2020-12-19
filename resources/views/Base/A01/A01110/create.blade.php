@extends('layouts.app')

@section('title')
    A01-Base Create
@endsection

@section('content')
    {{-- optional block --}}
    <div class="mb-3">
        <a href="{{ route('form.index') }}" class="btn btn-danger">Exit</a>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection