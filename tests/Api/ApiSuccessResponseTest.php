<?php

declare(strict_types=1);

namespace Api;

use PHPUnit\Framework\TestCase;
use Rigsto\ApiHttpStatus\ApiResources;

class ApiSuccessResponseTest extends TestCase
{
    public function testWithMessageResponse()
    {
        $dummyData = [
            'valid' => false
        ];

        $dummyMessage = 'Check valid done';

        $dummyResponse = [
            'success' => true,
            'code' => 200,
            'message' => $dummyMessage,
            'data' => $dummyData
        ];

        $response = ApiResources::generateSuccessResponse(message: $dummyMessage, data: $dummyData);
        self::assertEquals($response->getOriginalContent(), $dummyResponse);
    }

    public function testWithoutMessageResponse()
    {
        $dummyData = [
            'valid' => false
        ];

        $dummyResponse = [
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'data' => $dummyData
        ];

        $response = ApiResources::generateSuccessResponse(data: $dummyData);
        self::assertEquals($response->getOriginalContent(), $dummyResponse);
    }
}