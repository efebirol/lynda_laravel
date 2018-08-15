<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    // Deaktiviere Schutz für Laravel für jeden Request (Lösung das VerifyCsrfToken Problem zu umgehen)
    protected $except = [
        //
        //'*'
    ];
}
