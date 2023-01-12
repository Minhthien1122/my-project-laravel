<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApiRegisterRequest;

class ApiUserController extends Controller
{
    public function register(ApiRegisterRequest $request){
        return 'xin chao';
    }
}
