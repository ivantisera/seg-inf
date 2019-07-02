<?php
namespace App\Http\Controllers;

use App\Registro;

use Illuminate\Http\Request;

class RegistrosController
{
    public function crear(Request $request)
	{
        $request->validate(Registro::$rules);
        $formData = $request->except(['_token']);
    
		$registro = Registro::create($formData);
         return redirect()
         ->route('thanks');
    }

       public function thanks(){
           return view('thanks');
       }

       public function registro(){
        return view('register');
    }

}