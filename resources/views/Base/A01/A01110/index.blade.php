@extends('layouts.app')

@section('title')
    A01110-Base Index
@endsection

@section('content')
    {{-- optional block --}}
    <div class="mt-3 mb-3">
        <a href="{{ route('form.create') }}" class="btn btn-info">新增</a>
    </div>

    {{-- datatable --}}
@endsection
