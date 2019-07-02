<?php
namespace App\Http\Controllers;

use App\Registro;
use Illuminate\Http\Request;

class PanelController
{
	public function index()
	{
        $registros = Registro::withTrashed()->get();

        return view('registros', [
			'registros' => $registros
		]);
    }
}