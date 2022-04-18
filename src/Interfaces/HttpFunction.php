<?php

namespace Rigsto\ApiHttpStatus\Interfaces;

interface HttpFunction
{
    public function getStatusCode(): int;
    public function getName(): string;
    public function getCategory(): string;
    public function isSuccess(): bool;
    public function isValidCode(): bool;
}