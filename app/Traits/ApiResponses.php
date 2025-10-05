<?php

namespace App\Traits;

trait ApiResponses
{
    protected function ok(?string $message = null, $data = null)
    {
        return $this->respond(200, $message, $data);
    }
    
    protected function respond(int $statusCode, ?string $message = null, $data = null, ?string $errorCode = null)
    {
        $payload = [];

        if ($message) {
            $payload['message'] = $message;
        }

        if ($data) {
            $payload['data'] = $data;
        }

        if ($errorCode !== null) {
            $payload['errorCode'] = $errorCode;
        }

        return response()->json($payload, $statusCode);
    }

    /**
     * Haribol!
     * Note the order of parameters $errorCode and $data is different from that in respond method
     */
    protected function error(int $statusCode, ?string $message = null, ?string $errorCode = null, $data = null)
    {
        return $this->respond($statusCode, $message, $data, $errorCode);
    }
}
