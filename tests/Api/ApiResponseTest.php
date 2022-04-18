<?php

declare(strict_types=1);

namespace Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use PHPUnit\Framework\TestCase;
use Rigsto\ApiHttpStatus\ApiResources;
use Rigsto\ApiHttpStatus\HttpStatus;

class ApiResponseTest extends TestCase
{
    public function testCorrectResponse(){
        $dummyData = [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'asd@gmail.com'
        ];

        $dummyResponse = [
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'data' => $dummyData
        ];
        ;
        $response = ApiResources::generateResponse(HttpStatus::OK, null, $dummyData);
        self::assertEquals($response->getOriginalContent(), $dummyResponse);
    }

    public function testCorrectResponse2(){
        $dummyData = [
            'id' => 2,
            'name' => 'Donald Trump',
            'email' => 'asd@gmail.com',
            'age' => 70,
            'girlfriend' => [
                'name' => 'Hillary Clinton',
                'age' => 50
            ]
        ];

        $dummyResponse = [
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'data' => $dummyData
        ];

        $response = ApiResources::generateResponse(HttpStatus::OK, null, $dummyData);
        self::assertEquals($response->getOriginalContent(), $dummyResponse);
    }
}