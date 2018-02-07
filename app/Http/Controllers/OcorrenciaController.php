<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OcorrenciaController extends Controller
{
    public function show_med($key) {
		return view('central.medico', ['key' => $key]);
	}
	public function show($key) {
		return view('ocorrencia.show', ['key' => $key]);
	}
}
