<?php

declare(strict_types=1);

namespace Rigsto\ApiHttpStatus;

class ApiResources
{
    /**
     * Generate API response with status code and message.
     * @param HttpStatus $status
     * @param string|null $message
     * @param mixed|null $data
     * @return string|false
     */
    public static function generateResponse(HttpStatus $status, string $message = null, mixed $data = null): bool|string
    {
        return json_encode([
                'success' => $status->isSuccess(),
                'code' => $status->getStatusCode(),
                'message' => $message ?? $status->getName(),
                'data' => $data,
            ], $status->getStatusCode());
    }

    /**
     * Generate API response with status code and message including pagination data.
     * @param HttpStatus $status
     * @param string|null $message
     * @param mixed|null $data
     * @return string|false
     */
    public static function generatePaginationResponse(HttpStatus $status, string $message = null, mixed $data = null): bool|string
    {
        return json_encode([
                'success' => $status->isSuccess(),
                'code' => $status->getStatusCode(),
                'message' => $message ?? $status->getName(),
                'data' => [
                    'data' => $data,
                    'pagination' => [
                        'total' => $data->total(),
                        'per_page' => $data->perPage(),
                        'current_page' => $data->currentPage(),
                        'last_page' => $data->lastPage(),
                        'from' => $data->firstItem(),
                        'to' => $data->lastItem()
                    ]
                ]
            ], $status->getStatusCode());
    }
}