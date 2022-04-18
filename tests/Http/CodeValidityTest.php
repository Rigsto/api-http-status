<?php

declare(strict_types=1);

namespace Http;

use PHPUnit\Framework\TestCase;
use Rigsto\ApiHttpStatus\HttpStatus;

class CodeValidityTest extends TestCase
{
    private array $randomArrayCodes = array(
        100 => true,
        114 => false,
        202 => true,
        210 => false,
        227 => false,
        299 => true,
        304 => true,
        310 => false,
        404 => true,
        430 => false,
        495 => true,
        500 => true,
        520 => true,
        598 => true,
        600 => false
    );

    public function testIsValidCode(): void
    {
        foreach ($this->randomArrayCodes as $code => $isValid) {
            $this->assertEquals($isValid, HttpStatus::isValidCode($code));
        }
    }

    public function testFromCode(): void
    {
        foreach ($this->randomArrayCodes as $code => $isValid){
            $http = HttpStatus::fromCode($code);

            if ($isValid) {
                $this->assertEquals($code, $http->getStatusCode());
            } else {
                $this->assertNull($http);
            }
        }
    }
}