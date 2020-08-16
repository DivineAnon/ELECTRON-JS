<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class Logger
{
    public function log(Request $request, Response $response = null)
    {
        $record = new LogRecord();
        $record->client_ip = $request->ip();
        $record->user_id = Auth::id();
        $record->url = $request->fullUrl();
        $record->method = $request->method();
        $record->request_content_type = $request->headers->get('Content-Type');
        if ($request->isJson()) {
            $record->request_content = $request->getContent();
        }

        if ($response != null) {
            $record->response_code = $response->status();
        }

        $record->save();
    }
}
