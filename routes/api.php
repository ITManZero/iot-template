<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Ite\IotCore\Context\UserActivityContext;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/auth', function () {

    return new Response(json_encode(auth()->user()), ResponseAlias::HTTP_OK);
});

Route::get('/index', function (UserActivityContext $context) {

    return new Response($context->getUsersActivities(), ResponseAlias::HTTP_OK);
});
