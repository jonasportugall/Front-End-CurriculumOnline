<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{

    public function getProvincies(){
        $response = Http::get(env('API_URL'). '/provincies');
        return $response;
    }

    public function storeCurriculum(Request $request){
        
        $response = Http::post(env('API_URL'). '/storee');
        return $response;
       //$response = Http::post($url, $data);
    }

    public function formCreateCurriculum(){
        $response = Http::get(env('API_URL'). '/provincies');
        return view('forms/form-create-curriculum',['provincies'=>$response->json()]);
        //return view('forms/form-create-curriculum');
    }

}
