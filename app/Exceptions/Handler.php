<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // Vérifier si l'exception est une instance de ModelNotFoundException
        if (($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException)||($exception instanceof \PDOException) ) {
            // Vous pouvez rediriger vers une page spécifique ici si vous le souhaitez
            // Par exemple, return redirect('/not-found');

            // Ou afficher la page d'erreur personnalisée directement
            return response()->view('error', [], 500);
        }

        return parent::render($request, $exception);
    }

    // ...
}

