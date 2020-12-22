<?php 

namespace App\Service\Base\A01;

use App\Contracts\Service\FormServiceInterFace;
use App\Http\Requests\A01110FormRequest;
use Illuminate\Http\Request;

class A01110Service implements FormServiceInterFace
{
	public $FormRequest;
	
	public function __construct() {
		$this->registerFormRequest();
	}

	public function registerFormRequest()
	{
		return $this->FormRequest = app()->make(A01110FormRequest::class);
	}

	public function index() 
	{
		return view('Base.A01.A01110.index');
	}

	public function create() 
	{
		return view('Base.A01.A01110.create');
	}

	public function store(Request $request) 
	{
		dd($request->validate());
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