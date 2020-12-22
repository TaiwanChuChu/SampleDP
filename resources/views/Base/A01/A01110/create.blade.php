@extends('layouts.app')

@section('title')
    A01110-Base Create
@endsection

@section('content')
    {{-- optional block --}}
    <div class="mb-3">
        <a href="{{ route('form.index') }}" class="btn btn-danger">Exit</a>
    </div>
    <form method="post" action="{{ route('form.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection