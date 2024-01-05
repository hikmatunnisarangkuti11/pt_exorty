<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRestoRequest;
use App\Models\Resto;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function index()
    {
        $resto = Resto::first();
        return view('admin.master.resto.index', ['resto' => $resto, 'page_title' => 'Resto']);
    }

    public function update(UpdateRestoRequest $request)
    {
        $resto = Resto::first();
        $resto->fill($request->all());
        $resto->update();
        return redirect()->back();
    }
}
