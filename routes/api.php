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
    $user = auth()->user();
    if (is_null($user))
        return new Response(["message" => "Unauthorized"], ResponseAlias::HTTP_UNAUTHORIZED);
    return new Response(["message" => "Authorized", "date" => $user], ResponseAlias::HTTP_UNAUTHORIZED);

});

Route::get('/index', function (UserActivityContext $context) {
    return new Response($context->getUsersActivities(), ResponseAlias::HTTP_OK);
});
