@extends('layouts.app')

@section('title')
    A01110-Base Index
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            <ul style="color: white;">
                @foreach ($success as $msg)
                    <li class="text-dark">{{ $msg }}</li>
                @endforeach
            </ul>
        </div>
    @endif
{{--{{dd(session('success'))}}--}}
    {{-- optional block --}}
    <div class="mt-3 mb-3">
        <a href="{{ route('a01110.create') }}" class="btn btn-info">新增</a>
    </div>

    {{-- datatable --}}
    <div class="container">
        @foreach ($a01110_s as $data)
            <div class="alert alert-info">
                <h1>
                    {{ $data->name }}
                </h1>
                <p>
                    {{ $data->email }}
                </p>
                <a href="{{route('a01110.edit', [$data->id])}}" class="btn btn-info">編輯</a>
                <a href="{{route('a01110.show', [$data->id])}}" class="btn btn-info">檢視</a>
            </div>
        @endforeach
    </div>

    {!! $a01110_s->links() !!}
@endsection
