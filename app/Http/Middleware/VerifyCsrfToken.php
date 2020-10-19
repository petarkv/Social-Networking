<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "update-response","chat/sendMessage","chat/isTyping","chat/notTyping",
        "chat/retrieveChatMessages","chat/retrieveTypingStatus"
    ];
}
