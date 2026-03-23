<?php

use App\Http\Middleware\EmployePossedeCampus;
use App\Http\Middleware\EmployePossedeVoiture;
use App\Http\Middleware\VoitureCount;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        api: __DIR__.'/../routes/api.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'employe.voiture' => EmployePossedeVoiture::class,
            'employe.campuse' =>  EmployePossedeCampus::class,
            'voiture.count' => VoitureCount::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
