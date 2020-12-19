<?php

namespace App\Service\Ntue\A01;

use App\Contracts\Service\FormServiceInterFace;
use Illuminate\Http\Request;

class NewFunctionalService implements FormServiceInterFace
{
	public function index()
	{
		return view('Ntue.A01.NewFunctional.index');
	}

	public function create() 
	{
		return view('Ntue.A01.NewFunctional.create');
	}

	public function store(Request $request) 
	{

	}

	public function show($id) 
	{

	}

	public function edit($id) 
	{

	}

	public function update(Request $request, $id) 
	{

	}

	public function destroy($id) 
	{

	}

}

 ?>
