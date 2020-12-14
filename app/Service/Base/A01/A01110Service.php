<?php 

namespace App\Service\Base\A01;

use App\Contracts\Service\FormServiceInterFace;
use Illuminate\Http\Request;

class A01110Service implements FormServiceInterFace
{
	public function index() 
	{
		return view('Base.A01.A01110.index');
	}

	public function create() 
	{

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