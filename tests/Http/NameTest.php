<?php

declare(strict_types=1);

namespace Http;

use PHPUnit\Framework\TestCase;
use Rigsto\ApiHttpStatus\HttpStatus;

class NameTest extends TestCase
{
    public function testCorrectInformationalName()
    {
        self::assertEquals("Continue", HttpStatus::CONTINUE->getName());
        self::assertEquals("Switching Protocols", HttpStatus::SWITCHING_PROTOCOLS->getName());
        self::assertEquals("Processing", HttpStatus::PROCESSING->getName());
        self::assertEquals("Early Hints", HttpStatus::EARLY_HINTS->getName());;
        self::assertEquals("Response Is Stale", HttpStatus::RESPONSE_IS_STALE->getName());
        self::assertEquals("Response Failed", HttpStatus::RESPONSE_FAILED->getName());
        self::assertEquals("Disconnected Operation", HttpStatus::DISCONNECTED_OPERATION->getName());
        self::assertEquals("Heuristic Expiration", HttpStatus::HEURISTIC_EXPIRATION->getName());
        self::assertEquals("Miscellaneous Warning", HttpStatus::MISCELLANEOUS_WARNING->getName());
    }

    public function testCorrectSuccessName()
    {
        self::assertEquals("Ok", HttpStatus::OK->getName());
        self::assertEquals("Created", HttpStatus::CREATED->getName());
        self::assertEquals("Accepted", HttpStatus::ACCEPTED->getName());
        self::assertEquals("Non Authoritative Information", HttpStatus::NON_AUTHORITATIVE_INFORMATION->getName());
        self::assertEquals("No Content", HttpStatus::NO_CONTENT->getName());
        self::assertEquals("Reset Content", HttpStatus::RESET_CONTENT->getName());
        self::assertEquals("Partial Content", HttpStatus::PARTIAL_CONTENT->getName());
        self::assertEquals("Multi Status", HttpStatus::MULTI_STATUS->getName());
        self::assertEquals("Already Reported", HttpStatus::ALREADY_REPORTED->getName());
        self::assertEquals("Transformation Applied", HttpStatus::TRANSFORMATION_APPLIED->getName());
        self::assertEquals("Im Used", HttpStatus::IM_USED->getName());
        self::assertEquals("Miscellaneous Persistent Warning", HttpStatus::MISCELLANEOUS_PERSISTENT_WARNING->getName());
    }
    
    public function testCorrectRedirectionName()
    {
        self::assertEquals("Multiple Choices", HttpStatus::MULTIPLE_CHOICES->getName());
        self::assertEquals("Moved Permanently", HttpStatus::MOVED_PERMANENTLY->getName());
        self::assertEquals("Found", HttpStatus::FOUND->getName());
        self::assertEquals("See Other", HttpStatus::SEE_OTHER->getName());
        self::assertEquals("Not Modified", HttpStatus::NOT_MODIFIED->getName());
        self::assertEquals("Use Proxy", HttpStatus::USE_PROXY->getName());
        self::assertEquals("Switch Proxy", HttpStatus::SWITCH_PROXY->getName());
        self::assertEquals("Temporary Redirect", HttpStatus::TEMPORARY_REDIRECT->getName());
        self::assertEquals("Permanent Redirect", HttpStatus::PERMANENT_REDIRECT->getName());
    }
    
    public function testCorrectClientErrorName()
    {
        self::assertEquals("Bad Request", HttpStatus::BAD_REQUEST->getName());
        self::assertEquals("Unauthorized", HttpStatus::UNAUTHORIZED->getName());
        self::assertEquals("Payment Required", HttpStatus::PAYMENT_REQUIRED->getName());
        self::assertEquals("Forbidden", HttpStatus::FORBIDDEN->getName());
        self::assertEquals("Not Found", HttpStatus::NOT_FOUND->getName());
        self::assertEquals("Method Not Allowed", HttpStatus::METHOD_NOT_ALLOWED->getName());
        self::assertEquals("Not Acceptable", HttpStatus::NOT_ACCEPTABLE->getName());
        self::assertEquals("Proxy Authentication Required", HttpStatus::PROXY_AUTHENTICATION_REQUIRED->getName());
        self::assertEquals("Request Timeout", HttpStatus::REQUEST_TIMEOUT->getName());
        self::assertEquals("Conflict", HttpStatus::CONFLICT->getName());
        self::assertEquals("Gone", HttpStatus::GONE->getName());
        self::assertEquals("Length Required", HttpStatus::LENGTH_REQUIRED->getName());
        self::assertEquals("Precondition Failed", HttpStatus::PRECONDITION_FAILED->getName());
        self::assertEquals("Payload Too Large", HttpStatus::PAYLOAD_TOO_LARGE->getName());
        self::assertEquals("Uri Too Long", HttpStatus::URI_TOO_LONG->getName());
        self::assertEquals("Unsupported Media Type", HttpStatus::UNSUPPORTED_MEDIA_TYPE->getName());
        self::assertEquals("Range Not Satisfiable", HttpStatus::RANGE_NOT_SATISFIABLE->getName());
        self::assertEquals("Expectation Failed", HttpStatus::EXPECTATION_FAILED->getName());
        self::assertEquals("Im A Teapot", HttpStatus::IM_A_TEAPOT->getName());
        self::assertEquals("Page Expired", HttpStatus::PAGE_EXPIRED->getName());
        self::assertEquals("Method Failure", HttpStatus::METHOD_FAILURE->getName());
        self::assertEquals("Misdirected Request", HttpStatus::MISDIRECTED_REQUEST->getName());
        self::assertEquals("Unprocessable Entity", HttpStatus::UNPROCESSABLE_ENTITY->getName());
        self::assertEquals("Locked", HttpStatus::LOCKED->getName());
        self::assertEquals("Failed Dependency", HttpStatus::FAILED_DEPENDENCY->getName());
        self::assertEquals("Too Early", HttpStatus::TOO_EARLY->getName());
        self::assertEquals("Upgrade Required", HttpStatus::UPGRADE_REQUIRED->getName());
        self::assertEquals("Precondition Required", HttpStatus::PRECONDITION_REQUIRED->getName());
        self::assertEquals("Too Many Requests", HttpStatus::TOO_MANY_REQUESTS->getName());
        self::assertEquals("Request Header Fields Too Large", HttpStatus::REQUEST_HEADER_FIELDS_TOO_LARGE->getName());
        self::assertEquals("Login Timeout", HttpStatus::LOGIN_TIMEOUT->getName());
        self::assertEquals("No Response", HttpStatus::NO_RESPONSE->getName());
        self::assertEquals("Retry With", HttpStatus::RETRY_WITH->getName());
        self::assertEquals("Blocked By Windows Parental Controls", HttpStatus::BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS->getName());
        self::assertEquals("Unavailable For Legal Reasons", HttpStatus::UNAVAILABLE_FOR_LEGAL_REASONS->getName());
        self::assertEquals("Request Header Too Large", HttpStatus::REQUEST_HEADER_TOO_LARGE->getName());
        self::assertEquals("Ssl Certificate Error", HttpStatus::SSL_CERTIFICATE_ERROR->getName());
        self::assertEquals("Ssl Certificate Required", HttpStatus::SSL_CERTIFICATE_REQUIRED->getName());
        self::assertEquals("Http Request Sent To Https Port", HttpStatus::HTTP_REQUEST_SENT_TO_HTTPS_PORT->getName());
        self::assertEquals("Invalid Token", HttpStatus::INVALID_TOKEN->getName());
        self::assertEquals("Token Required", HttpStatus::TOKEN_REQUIRED->getName());
    }

    public function testCorrectServerErrorName()
    {
        self::assertEquals("Internal Server Error", HttpStatus::INTERNAL_SERVER_ERROR->getName());
        self::assertEquals("Not Implemented", HttpStatus::NOT_IMPLEMENTED->getName());
        self::assertEquals("Bad Gateway", HttpStatus::BAD_GATEWAY->getName());
        self::assertEquals("Service Unavailable", HttpStatus::SERVICE_UNAVAILABLE->getName());
        self::assertEquals("Gateway Timeout", HttpStatus::GATEWAY_TIMEOUT->getName());
        self::assertEquals("Http Version Not Supported", HttpStatus::HTTP_VERSION_NOT_SUPPORTED->getName());
        self::assertEquals("Variant Also Negotiates", HttpStatus::VARIANT_ALSO_NEGOTIATES->getName());
        self::assertEquals("Insufficient Storage", HttpStatus::INSUFFICIENT_STORAGE->getName());
        self::assertEquals("Loop Detected", HttpStatus::LOOP_DETECTED->getName());
        self::assertEquals("Bandwidth Limit Exceeded", HttpStatus::BANDWIDTH_LIMIT_EXCEEDED->getName());
        self::assertEquals("Not Extended", HttpStatus::NOT_EXTENDED->getName());
        self::assertEquals("Network Authentication Required", HttpStatus::NETWORK_AUTHENTICATION_REQUIRED->getName());
        self::assertEquals("Web Server Returned An Unknown Error", HttpStatus::WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR->getName());
        self::assertEquals("Web Server Is Down", HttpStatus::WEB_SERVER_IS_DOWN->getName());
        self::assertEquals("Connection Timed Out", HttpStatus::CONNECTION_TIMED_OUT->getName());
        self::assertEquals("Origin Is Unreachable", HttpStatus::ORIGIN_IS_UNREACHABLE->getName());
        self::assertEquals("A Timeout Occurred", HttpStatus::A_TIMEOUT_OCCURRED->getName());
        self::assertEquals("Ssl Handshake Failed", HttpStatus::SSL_HANDSHAKE_FAILED->getName());
        self::assertEquals("Invalid Ssl Certificate", HttpStatus::INVALID_SSL_CERTIFICATE->getName());
        self::assertEquals("Railgun Error", HttpStatus::RAILGUN_ERROR->getName());
        self::assertEquals("Site Is Overloaded", HttpStatus::SITE_IS_OVERLOADED->getName());
        self::assertEquals("Site Is Frozen", HttpStatus::SITE_IS_FROZEN->getName());
        self::assertEquals("Network Read Timeout Error", HttpStatus::NETWORK_READ_TIMEOUT_ERROR->getName());
        self::assertEquals("Network Connect Timeout Error", HttpStatus::NETWORK_CONNECT_TIMEOUT_ERROR->getName());
    }
}