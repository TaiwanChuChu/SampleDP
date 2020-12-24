@extends('layouts.app')

@section('title')
    A01-Ntue Create
@endsection

@section('content')
    {{-- optional block --}}
    <div class="mb-3">
        <a href="{{ route('a01110.index') }}" class="btn btn-danger">Exit</a>
    </div>
    @include('layouts.BaseCreate')
    <div class="form-group">
        <label for="birth">Birth</label>
        <input type="date" class="form-control" id="birth">
    </div>
@endsection
