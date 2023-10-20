<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\ErrorResource;
use App\Http\Resources\SuccessResource;
use App\Services\Auth\RegisterService;

class AuthController extends Controller
{

    /**
     * AuthController constructor.
     * @param RegisterService $registerService
     */
    public function __construct(private readonly RegisterService $registerService)
    {
    }

    public function registration(RegisterRequest $request): ErrorResource|SuccessResource
    {
        return $this->registerService->register($request->validated());
    }

    public function login(LoginRequest $request): ErrorResource|SuccessResource
    {
        return $this->registerService->login($request->validated());
    }

}
