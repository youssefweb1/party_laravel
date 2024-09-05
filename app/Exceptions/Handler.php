<?php
namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        // إذا كان الخطأ من نوع ModelNotFoundException
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            return response()->view('errors.404', [], 404); // تأكد من أن الـ view في مجلد errors
        }

        // إذا كان الخطأ من نوع NotFoundHttpException
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
            return response()->view('errors.404', [], 404); // تأكد من أن الـ view في مجلد errors
        }

        return parent::render($request, $exception);
    }

    // باقي الكود يبقى كما هو
}

