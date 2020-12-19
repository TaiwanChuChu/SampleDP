@extends('layouts.app')

@section('title')
    A01-Ntue Index
@endsection

@section('content')
	{{-- optional block --}}
	<div class="mt-3 mb-3">
		<a href="{{ route('form.create') }}" class="btn btn-info">新增</a>
		<a href="{{ route('NewFunctional.index') }}" class="btn btn-info">客製功能</a>
	</div>

	{{-- datatable --}}
    
@endsection
