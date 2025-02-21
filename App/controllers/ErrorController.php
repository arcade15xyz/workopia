<?php

namespace App\Controllers;

class ErrorController
{
    /**
     * 404 not found error
     *
     * @return void
     */
    public static function notFound($message = 'Resource not found')
    {
        http_response_code(404);

        loadview('error', [
            'status' => '404',
            'message' => $message
        ]);
    }

    /**
     * 403 unauthorized error
     *
     * @return void
     */
    public static function unauthorized($message = 'you are not authorized to view this resource')
    {
        http_response_code(403);

        loadview('error', [
            'status' => '404',
            'message' => $message
        ]);
    }
}
