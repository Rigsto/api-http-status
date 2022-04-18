<?php

declare(strict_types=1);

namespace Http;

use PHPUnit\Framework\TestCase;
use Rigsto\ApiHttpStatus\HttpStatus;

class SuccessTest extends TestCase
{
    public function testCorrectInformationalSuccess()
    {
        self::assertFalse(HttpStatus::CONTINUE->isSuccess());
        self::assertFalse(HttpStatus::SWITCHING_PROTOCOLS->isSuccess());
        self::assertFalse(HttpStatus::PROCESSING->isSuccess());
        self::assertFalse(HttpStatus::EARLY_HINTS->isSuccess());;
        self::assertFalse(HttpStatus::RESPONSE_IS_STALE->isSuccess());
        self::assertFalse(HttpStatus::RESPONSE_FAILED->isSuccess());
        self::assertFalse(HttpStatus::DISCONNECTED_OPERATION->isSuccess());
        self::assertFalse(HttpStatus::HEURISTIC_EXPIRATION->isSuccess());
        self::assertFalse(HttpStatus::MISCELLANEOUS_WARNING->isSuccess());
    }
    
    public function testCorrectSuccessSuccess()
    {
        self::assertTrue(HttpStatus::OK->isSuccess());
        self::assertTrue(HttpStatus::CREATED->isSuccess());
        self::assertTrue(HttpStatus::ACCEPTED->isSuccess());
        self::assertTrue(HttpStatus::NON_AUTHORITATIVE_INFORMATION->isSuccess());
        self::assertTrue(HttpStatus::NO_CONTENT->isSuccess());
        self::assertTrue(HttpStatus::RESET_CONTENT->isSuccess());
        self::assertTrue(HttpStatus::PARTIAL_CONTENT->isSuccess());
        self::assertTrue(HttpStatus::MULTI_STATUS->isSuccess());
        self::assertTrue(HttpStatus::ALREADY_REPORTED->isSuccess());
        self::assertTrue(HttpStatus::TRANSFORMATION_APPLIED->isSuccess());
        self::assertTrue(HttpStatus::IM_USED->isSuccess());
        self::assertTrue(HttpStatus::MISCELLANEOUS_PERSISTENT_WARNING->isSuccess());
    }
    
    public function testCorrectRedirectionSuccess()
    {
        self::assertFalse(HttpStatus::MULTIPLE_CHOICES->isSuccess());
        self::assertFalse(HttpStatus::MOVED_PERMANENTLY->isSuccess());
        self::assertFalse(HttpStatus::FOUND->isSuccess());
        self::assertFalse(HttpStatus::SEE_OTHER->isSuccess());
        self::assertFalse(HttpStatus::NOT_MODIFIED->isSuccess());
        self::assertFalse(HttpStatus::USE_PROXY->isSuccess());
        self::assertFalse(HttpStatus::SWITCH_PROXY->isSuccess());
        self::assertFalse(HttpStatus::TEMPORARY_REDIRECT->isSuccess());
        self::assertFalse(HttpStatus::PERMANENT_REDIRECT->isSuccess());
    }
    
    public function testCorrectClientErrorSuccess()
    {
        self::assertFalse(HttpStatus::BAD_REQUEST->isSuccess());
        self::assertFalse(HttpStatus::UNAUTHORIZED->isSuccess());
        self::assertFalse(HttpStatus::PAYMENT_REQUIRED->isSuccess());
        self::assertFalse(HttpStatus::FORBIDDEN->isSuccess());
        self::assertFalse(HttpStatus::NOT_FOUND->isSuccess());
        self::assertFalse(HttpStatus::METHOD_NOT_ALLOWED->isSuccess());
        self::assertFalse(HttpStatus::NOT_ACCEPTABLE->isSuccess());
        self::assertFalse(HttpStatus::PROXY_AUTHENTICATION_REQUIRED->isSuccess());
        self::assertFalse(HttpStatus::REQUEST_TIMEOUT->isSuccess());
        self::assertFalse(HttpStatus::CONFLICT->isSuccess());
        self::assertFalse(HttpStatus::GONE->isSuccess());
        self::assertFalse(HttpStatus::LENGTH_REQUIRED->isSuccess());
        self::assertFalse(HttpStatus::PRECONDITION_FAILED->isSuccess());
        self::assertFalse(HttpStatus::PAYLOAD_TOO_LARGE->isSuccess());
        self::assertFalse(HttpStatus::URI_TOO_LONG->isSuccess());
        self::assertFalse(HttpStatus::UNSUPPORTED_MEDIA_TYPE->isSuccess());
        self::assertFalse(HttpStatus::RANGE_NOT_SATISFIABLE->isSuccess());
        self::assertFalse(HttpStatus::EXPECTATION_FAILED->isSuccess());
        self::assertFalse(HttpStatus::IM_A_TEAPOT->isSuccess());
        self::assertFalse(HttpStatus::PAGE_EXPIRED->isSuccess());
        self::assertFalse(HttpStatus::METHOD_FAILURE->isSuccess());
        self::assertFalse(HttpStatus::MISDIRECTED_REQUEST->isSuccess());
        self::assertFalse(HttpStatus::UNPROCESSABLE_ENTITY->isSuccess());
        self::assertFalse(HttpStatus::LOCKED->isSuccess());
        self::assertFalse(HttpStatus::FAILED_DEPENDENCY->isSuccess());
        self::assertFalse(HttpStatus::TOO_EARLY->isSuccess());
        self::assertFalse(HttpStatus::UPGRADE_REQUIRED->isSuccess());
        self::assertFalse(HttpStatus::PRECONDITION_REQUIRED->isSuccess());
        self::assertFalse(HttpStatus::TOO_MANY_REQUESTS->isSuccess());
        self::assertFalse(HttpStatus::REQUEST_HEADER_FIELDS_TOO_LARGE->isSuccess());
        self::assertFalse(HttpStatus::LOGIN_TIMEOUT->isSuccess());
        self::assertFalse(HttpStatus::NO_RESPONSE->isSuccess());
        self::assertFalse(HttpStatus::RETRY_WITH->isSuccess());
        self::assertFalse(HttpStatus::BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS->isSuccess());
        self::assertFalse(HttpStatus::UNAVAILABLE_FOR_LEGAL_REASONS->isSuccess());
        self::assertFalse(HttpStatus::REQUEST_HEADER_TOO_LARGE->isSuccess());
        self::assertFalse(HttpStatus::SSL_CERTIFICATE_ERROR->isSuccess());
        self::assertFalse(HttpStatus::SSL_CERTIFICATE_REQUIRED->isSuccess());
        self::assertFalse(HttpStatus::HTTP_REQUEST_SENT_TO_HTTPS_PORT->isSuccess());
        self::assertFalse(HttpStatus::INVALID_TOKEN->isSuccess());
        self::assertFalse(HttpStatus::TOKEN_REQUIRED->isSuccess());
    }
    
    public function testCorrectServerErrorSuccess()
    {
        self::assertFalse(HttpStatus::INTERNAL_SERVER_ERROR->isSuccess());
        self::assertFalse(HttpStatus::NOT_IMPLEMENTED->isSuccess());
        self::assertFalse(HttpStatus::BAD_GATEWAY->isSuccess());
        self::assertFalse(HttpStatus::SERVICE_UNAVAILABLE->isSuccess());
        self::assertFalse(HttpStatus::GATEWAY_TIMEOUT->isSuccess());
        self::assertFalse(HttpStatus::HTTP_VERSION_NOT_SUPPORTED->isSuccess());
        self::assertFalse(HttpStatus::VARIANT_ALSO_NEGOTIATES->isSuccess());
        self::assertFalse(HttpStatus::INSUFFICIENT_STORAGE->isSuccess());
        self::assertFalse(HttpStatus::LOOP_DETECTED->isSuccess());
        self::assertFalse(HttpStatus::BANDWIDTH_LIMIT_EXCEEDED->isSuccess());
        self::assertFalse(HttpStatus::NOT_EXTENDED->isSuccess());
        self::assertFalse(HttpStatus::NETWORK_AUTHENTICATION_REQUIRED->isSuccess());
        self::assertFalse(HttpStatus::WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR->isSuccess());
        self::assertFalse(HttpStatus::WEB_SERVER_IS_DOWN->isSuccess());
        self::assertFalse(HttpStatus::CONNECTION_TIMED_OUT->isSuccess());
        self::assertFalse(HttpStatus::ORIGIN_IS_UNREACHABLE->isSuccess());
        self::assertFalse(HttpStatus::A_TIMEOUT_OCCURRED->isSuccess());
        self::assertFalse(HttpStatus::SSL_HANDSHAKE_FAILED->isSuccess());
        self::assertFalse(HttpStatus::INVALID_SSL_CERTIFICATE->isSuccess());
        self::assertFalse(HttpStatus::RAILGUN_ERROR->isSuccess());
        self::assertFalse(HttpStatus::SITE_IS_OVERLOADED->isSuccess());
        self::assertFalse(HttpStatus::SITE_IS_FROZEN->isSuccess());
        self::assertFalse(HttpStatus::NETWORK_READ_TIMEOUT_ERROR->isSuccess());
        self::assertFalse(HttpStatus::NETWORK_CONNECT_TIMEOUT_ERROR->isSuccess());
    }
}