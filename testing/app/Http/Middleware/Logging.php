<?php

namespace App\Http\Middleware;

use App\Logger;
use Closure;
use Exception;
use Illuminate\Support\Facades\Storage;

class Logging
{
    private $logger;

    function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function handle($request, Closure $next)
    {
        $response = $next($request);

        try {
            $this->logger->log($request);
        } catch (Exception $e) {
            // ignore the error
        }

        return $response;
    }
}
