<?php

namespace Rigsto\ApiHttpStatus\Interfaces;

use Rigsto\ApiHttpStatus\HttpStatus;

interface HttpFunction
{
    public function getStatusCode(): int;
    public function getName(): string;
    public function getCategory(): string;
    public function isSuccess(): bool;
    public static function isValidCode(int $code): bool;
    public static function fromCode(int $code): ?HttpStatus;
}