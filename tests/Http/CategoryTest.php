<?php

declare(strict_types=1);

namespace Http;

use PHPUnit\Framework\TestCase;
use Rigsto\ApiHttpStatus\HttpStatus;

class CategoryTest extends TestCase
{
    public function testCorrectInformationalCategory()
    {
        self::assertEquals("Informational", HttpStatus::CONTINUE->getCategory());
        self::assertEquals("Informational", HttpStatus::SWITCHING_PROTOCOLS->getCategory());
        self::assertEquals("Informational", HttpStatus::PROCESSING->getCategory());
        self::assertEquals("Informational", HttpStatus::EARLY_HINTS->getCategory());;
        self::assertEquals("Informational", HttpStatus::RESPONSE_IS_STALE->getCategory());
        self::assertEquals("Informational", HttpStatus::RESPONSE_FAILED->getCategory());
        self::assertEquals("Informational", HttpStatus::DISCONNECTED_OPERATION->getCategory());
        self::assertEquals("Informational", HttpStatus::HEURISTIC_EXPIRATION->getCategory());
        self::assertEquals("Informational", HttpStatus::MISCELLANEOUS_WARNING->getCategory());
    }

    public function testCorrectSuccessCategory()
    {
        self::assertEquals("Success", HttpStatus::OK->getCategory());
        self::assertEquals("Success", HttpStatus::CREATED->getCategory());
        self::assertEquals("Success", HttpStatus::ACCEPTED->getCategory());
        self::assertEquals("Success", HttpStatus::NON_AUTHORITATIVE_INFORMATION->getCategory());
        self::assertEquals("Success", HttpStatus::NO_CONTENT->getCategory());
        self::assertEquals("Success", HttpStatus::RESET_CONTENT->getCategory());
        self::assertEquals("Success", HttpStatus::PARTIAL_CONTENT->getCategory());
        self::assertEquals("Success", HttpStatus::MULTI_STATUS->getCategory());
        self::assertEquals("Success", HttpStatus::ALREADY_REPORTED->getCategory());
        self::assertEquals("Success", HttpStatus::TRANSFORMATION_APPLIED->getCategory());
        self::assertEquals("Success", HttpStatus::IM_USED->getCategory());
        self::assertEquals("Success", HttpStatus::MISCELLANEOUS_PERSISTENT_WARNING->getCategory());
    }
    
    public function testCorrectRedirectionCategory()
    {
        self::assertEquals("Redirection", HttpStatus::MULTIPLE_CHOICES->getCategory());
        self::assertEquals("Redirection", HttpStatus::MOVED_PERMANENTLY->getCategory());
        self::assertEquals("Redirection", HttpStatus::FOUND->getCategory());
        self::assertEquals("Redirection", HttpStatus::SEE_OTHER->getCategory());
        self::assertEquals("Redirection", HttpStatus::NOT_MODIFIED->getCategory());
        self::assertEquals("Redirection", HttpStatus::USE_PROXY->getCategory());
        self::assertEquals("Redirection", HttpStatus::SWITCH_PROXY->getCategory());
        self::assertEquals("Redirection", HttpStatus::TEMPORARY_REDIRECT->getCategory());
        self::assertEquals("Redirection", HttpStatus::PERMANENT_REDIRECT->getCategory());
    }
    
    public function testCorrectClientErrorCategory()
    {
        self::assertEquals("Client Error", HttpStatus::BAD_REQUEST->getCategory());
        self::assertEquals("Client Error", HttpStatus::UNAUTHORIZED->getCategory());
        self::assertEquals("Client Error", HttpStatus::PAYMENT_REQUIRED->getCategory());
        self::assertEquals("Client Error", HttpStatus::FORBIDDEN->getCategory());
        self::assertEquals("Client Error", HttpStatus::NOT_FOUND->getCategory());
        self::assertEquals("Client Error", HttpStatus::METHOD_NOT_ALLOWED->getCategory());
        self::assertEquals("Client Error", HttpStatus::NOT_ACCEPTABLE->getCategory());
        self::assertEquals("Client Error", HttpStatus::PROXY_AUTHENTICATION_REQUIRED->getCategory());
        self::assertEquals("Client Error", HttpStatus::REQUEST_TIMEOUT->getCategory());
        self::assertEquals("Client Error", HttpStatus::CONFLICT->getCategory());
        self::assertEquals("Client Error", HttpStatus::GONE->getCategory());
        self::assertEquals("Client Error", HttpStatus::LENGTH_REQUIRED->getCategory());
        self::assertEquals("Client Error", HttpStatus::PRECONDITION_FAILED->getCategory());
        self::assertEquals("Client Error", HttpStatus::PAYLOAD_TOO_LARGE->getCategory());
        self::assertEquals("Client Error", HttpStatus::URI_TOO_LONG->getCategory());
        self::assertEquals("Client Error", HttpStatus::UNSUPPORTED_MEDIA_TYPE->getCategory());
        self::assertEquals("Client Error", HttpStatus::RANGE_NOT_SATISFIABLE->getCategory());
        self::assertEquals("Client Error", HttpStatus::EXPECTATION_FAILED->getCategory());
        self::assertEquals("Client Error", HttpStatus::IM_A_TEAPOT->getCategory());
        self::assertEquals("Client Error", HttpStatus::PAGE_EXPIRED->getCategory());
        self::assertEquals("Client Error", HttpStatus::METHOD_FAILURE->getCategory());
        self::assertEquals("Client Error", HttpStatus::MISDIRECTED_REQUEST->getCategory());
        self::assertEquals("Client Error", HttpStatus::UNPROCESSABLE_ENTITY->getCategory());
        self::assertEquals("Client Error", HttpStatus::LOCKED->getCategory());
        self::assertEquals("Client Error", HttpStatus::FAILED_DEPENDENCY->getCategory());
        self::assertEquals("Client Error", HttpStatus::TOO_EARLY->getCategory());
        self::assertEquals("Client Error", HttpStatus::UPGRADE_REQUIRED->getCategory());
        self::assertEquals("Client Error", HttpStatus::PRECONDITION_REQUIRED->getCategory());
        self::assertEquals("Client Error", HttpStatus::TOO_MANY_REQUESTS->getCategory());
        self::assertEquals("Client Error", HttpStatus::REQUEST_HEADER_FIELDS_TOO_LARGE->getCategory());
        self::assertEquals("Client Error", HttpStatus::LOGIN_TIMEOUT->getCategory());
        self::assertEquals("Client Error", HttpStatus::NO_RESPONSE->getCategory());
        self::assertEquals("Client Error", HttpStatus::RETRY_WITH->getCategory());
        self::assertEquals("Client Error", HttpStatus::BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS->getCategory());
        self::assertEquals("Client Error", HttpStatus::UNAVAILABLE_FOR_LEGAL_REASONS->getCategory());
        self::assertEquals("Client Error", HttpStatus::REQUEST_HEADER_TOO_LARGE->getCategory());
        self::assertEquals("Client Error", HttpStatus::SSL_CERTIFICATE_ERROR->getCategory());
        self::assertEquals("Client Error", HttpStatus::SSL_CERTIFICATE_REQUIRED->getCategory());
        self::assertEquals("Client Error", HttpStatus::HTTP_REQUEST_SENT_TO_HTTPS_PORT->getCategory());
        self::assertEquals("Client Error", HttpStatus::INVALID_TOKEN->getCategory());
        self::assertEquals("Client Error", HttpStatus::TOKEN_REQUIRED->getCategory());
    }

    public function testCorrectServerErrorCategory()
    {
        self::assertEquals("Server Error", HttpStatus::INTERNAL_SERVER_ERROR->getCategory());
        self::assertEquals("Server Error", HttpStatus::NOT_IMPLEMENTED->getCategory());
        self::assertEquals("Server Error", HttpStatus::BAD_GATEWAY->getCategory());
        self::assertEquals("Server Error", HttpStatus::SERVICE_UNAVAILABLE->getCategory());
        self::assertEquals("Server Error", HttpStatus::GATEWAY_TIMEOUT->getCategory());
        self::assertEquals("Server Error", HttpStatus::HTTP_VERSION_NOT_SUPPORTED->getCategory());
        self::assertEquals("Server Error", HttpStatus::VARIANT_ALSO_NEGOTIATES->getCategory());
        self::assertEquals("Server Error", HttpStatus::INSUFFICIENT_STORAGE->getCategory());
        self::assertEquals("Server Error", HttpStatus::LOOP_DETECTED->getCategory());
        self::assertEquals("Server Error", HttpStatus::BANDWIDTH_LIMIT_EXCEEDED->getCategory());
        self::assertEquals("Server Error", HttpStatus::NOT_EXTENDED->getCategory());
        self::assertEquals("Server Error", HttpStatus::NETWORK_AUTHENTICATION_REQUIRED->getCategory());
        self::assertEquals("Server Error", HttpStatus::WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR->getCategory());
        self::assertEquals("Server Error", HttpStatus::WEB_SERVER_IS_DOWN->getCategory());
        self::assertEquals("Server Error", HttpStatus::CONNECTION_TIMED_OUT->getCategory());
        self::assertEquals("Server Error", HttpStatus::ORIGIN_IS_UNREACHABLE->getCategory());
        self::assertEquals("Server Error", HttpStatus::A_TIMEOUT_OCCURRED->getCategory());
        self::assertEquals("Server Error", HttpStatus::SSL_HANDSHAKE_FAILED->getCategory());
        self::assertEquals("Server Error", HttpStatus::INVALID_SSL_CERTIFICATE->getCategory());
        self::assertEquals("Server Error", HttpStatus::RAILGUN_ERROR->getCategory());
        self::assertEquals("Server Error", HttpStatus::SITE_IS_OVERLOADED->getCategory());
        self::assertEquals("Server Error", HttpStatus::SITE_IS_FROZEN->getCategory());
        self::assertEquals("Server Error", HttpStatus::NETWORK_READ_TIMEOUT_ERROR->getCategory());
        self::assertEquals("Server Error", HttpStatus::NETWORK_CONNECT_TIMEOUT_ERROR->getCategory());
    }

}