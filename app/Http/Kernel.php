<?php

    
class Kernel
{
    protected $routeMiddleware = [

        'auth' =>\App\Http\Middleware\Authenticate::class,
        'auth.basic' =>\Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest'=>\App\Http\Middleware\RedirectIfAuthenticated::class,
        'cors' => \App\Http\Middleware\Cors::class
    ];


}




