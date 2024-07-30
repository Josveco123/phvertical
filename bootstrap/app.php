<?php


use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckForAuth;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\ValidateSignature;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Auth\Middleware\RequirePassword;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\SetCacheHeaders;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
   //
   $middleware ->alias([
    'auth' => Authenticate::class,
    'checkforauth' => CheckForAuth::class,
    'auth.basic' => AuthenticateWithBasicAuth::class,
    'auth.session' => AuthenticateSession::class,
    'cache.headers' => SetCacheHeaders::class,
    'can' => Authorize::class,
    'guest' => RedirectIfAuthenticated::class,
    'password.confirm' => RequirePassword::class,
    'precognitive' => HandlePrecognitiveRequests::class,
    'signed' => ValidateSignature::class,
    'throttle' => ThrottleRequests::class,
    'verified' => EnsureEmailIsVerified::class,
   ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
