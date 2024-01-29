<?php

declare(strict_types=1);

namespace Rigsto\ApiHttpStatus;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiResources extends JsonResource
{
    /**
     * Generate API response with status code and message.
     * @param HttpStatus $status
     * @param string|null $message
     * @param mixed|null $data
     * @return JsonResponse
     */
    public static function generateResponse(HttpStatus $status, string $message = null, mixed $data = null): JsonResponse
    {
        return new JsonResponse([
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
     * @return JsonResponse
     */
    public static function generatePaginationResponse(HttpStatus $status, string $message = null, mixed $data = null): JsonResponse
    {
        return new JsonResponse([
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

    /**
     * Generate success API response
     * @param string|null $message
     * @param mixed|null $data
     * @retyrn JsonResponse
     */
    public static function generateSuccessResponse(string $message = null, mixed $data = null): JsonResponse
    {
        return static::generateResponse(HttpStatus::OK, $message, $data);
    }

    /**
     * Generate success API response with pagination
     * @param string|null $message
     * @param mixed|null $data
     * @retyrn JsonResponse
     */
    public static function generatePaginationSuccessResponse(string $message = null, mixed $data = null): JsonResponse
    {
        return static::generatePaginationResponse(HttpStatus::OK, $message, $data);
    }

    /**
     * Generate unauthorized API response
     * @return JsonResponse
     */
    public static function generateUnauthorizedResponse(): JsonResponse
    {
        return static::generateResponse(HttpStatus::UNAUTHORIZED);
    }
}