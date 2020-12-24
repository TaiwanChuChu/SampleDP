<?php

namespace App\Service\Base\A01;

use App\Contracts\Service\FormServiceInterFace;
use App\Models\A01110;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class A01110Service implements FormServiceInterFace
{

    public function index()
    {
        return view('Base.A01.A01110.index', [
            'a01110_s' => A01110::paginate(2),
        ]);
    }

    public function create()
    {
        return view('Base.A01.A01110.create');
    }

    public function store(Request $request)
    {
        try {
            A01110::insert([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            Session::flush(['success' => '新增資料成功!']);
        } catch (\Exception $exception) {
            Session::flush(['errors' => '新增資料失敗!']);
        }

        return redirect(route('a01110.index'));
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
