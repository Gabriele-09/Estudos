<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ViaCepController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $cep = $this->request->cep;
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");
        $response = json_decode($response);
        //dd($response);    

        return view('buscaCep', [
            'endereco' => $response
        ]);
    }

}

