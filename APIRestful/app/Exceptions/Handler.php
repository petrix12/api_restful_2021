<?php

namespace App\Exceptions;

use App\Traits\ApiResponser;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Mockery\Exception\InvalidOrderException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */    
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        /* $this->renderable(function (NotFoundHttpException $e, $request) {
            return $this->errorResponse('No se encontró la URL especificada', 404);
        }); */
        $this->renderable(function (Exception $e, $request) {
            if ($e instanceof ValidationException) {
                $errors = $e->validator->errors()->getMessages();
                return $this->convertValidationExceptionToResponse($errors, $request);
            }

            if ($e instanceof ModelNotFoundException) {
                $modelo = strtolower(class_basename($e->getModel()));
                return $this->errorResponse("No existe ninguna instancia de {$modelo} con el id especificado", 404);
            }

            if ($e instanceof AuthenticationException) {
                return $this->unauthenticated($request, $e);
            }

            if ($e instanceof AuthorizationException) {
                return $this->errorResponse('No posee permisos para ejecutar esta acción', 403);
            }

            if ($e instanceof NotFoundHttpException) {
                return $this->errorResponse('No se encontró la URL especificada', 404);
            }

            if ($e instanceof MethodNotAllowedHttpException) {
                return $this->errorResponse('El método especificado en la petición no es válido', 405);
            }

            if ($e instanceof HttpException) {
                return $this->errorResponse($e->getMessage(), $e->getStatusCode());
            }

            if ($e instanceof QueryException) {
                $codigo = $e->errorInfo[1];

                if ($codigo == 1451) {
                    return $this->errorResponse('No se puede eliminar de forma permamente el recurso porque está relacionado con algún otro.', 409);
                }
            }

            if ($e instanceof TokenMismatchException) {
                return redirect()->back()->withInput($request->input());
            }

            if (config('app.debug')) {
                return parent::render($request, $e);            
            }

            return $this->errorResponse('Falla inesperada. Intente luego', 500);
        });
    }
}
