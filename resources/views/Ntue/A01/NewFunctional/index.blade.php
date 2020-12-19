@extends('layouts.app')

@section('title')
    NewFunctional-Ntue Index
@endsection

@section('content')
	{{-- optional block --}}
	<div class="mt-3 mb-3">
        <a href="{{ route('NewFunctional.create') }}" class="btn btn-info">新增</a>
    </div>
	{{-- datatable --}}
    
@endsection
