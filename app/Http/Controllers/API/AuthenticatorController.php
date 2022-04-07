<?php

namespace App\Http\Controllers\API;

use App\Services\AuthenticatorService;
use Illuminate\Http\Request;
use Validator;

class AuthenticatorController
{

    protected $authenticatorService;

    public function __construct(AuthenticatorService $authenticatorService)
    {
        $this->authenticatorService = $authenticatorService;
    }

    public function register(Request $request)
    {
        return $this->authenticatorService->register($request);
    }

    public function login(Request $request)
    {
        return $this->authenticatorService->login($request);
    }

}
