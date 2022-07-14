<?php

declare(strict_types=1);

namespace Api;

use PHPUnit\Framework\TestCase;
use Rigsto\ApiHttpStatus\ApiResources;

class ApiErrorResponseTest extends TestCase
{
    public function testUnauthorizedResponse()
    {
        $dummyResponse = [
            'success' => false,
            'code' => 401,
            'message' => 'Unauthorized',
            'data' => null
        ];

        $response = ApiResources::generateUnauthorizedResponse();
        self::assertEquals($response->getOriginalContent(), $dummyResponse);
    }
}