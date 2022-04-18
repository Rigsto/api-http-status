<?php

declare(strict_types=1);

namespace Http;

use PHPUnit\Framework\TestCase;
use Rigsto\ApiHttpStatus\HttpStatus;

class StatusCodeTest extends TestCase
{
    public function testCorrectInformationalStatusCode()
    {
        self::assertEquals(100, HttpStatus::CONTINUE->getStatusCode());
        self::assertEquals(101, HttpStatus::SWITCHING_PROTOCOLS->getStatusCode());
        self::assertEquals(102, HttpStatus::PROCESSING->getStatusCode());
        self::assertEquals(103, HttpStatus::EARLY_HINTS->getStatusCode());;
        self::assertEquals(110, HttpStatus::RESPONSE_IS_STALE->getStatusCode());
        self::assertEquals(111, HttpStatus::RESPONSE_FAILED->getStatusCode());
        self::assertEquals(112, HttpStatus::DISCONNECTED_OPERATION->getStatusCode());
        self::assertEquals(113, HttpStatus::HEURISTIC_EXPIRATION->getStatusCode());
        self::assertEquals(199, HttpStatus::MISCELLANEOUS_WARNING->getStatusCode());
    }

    public function testCorrectSuccessStatusCode()
    {
        self::assertEquals(200, HttpStatus::OK->getStatusCode());
        self::assertEquals(201, HttpStatus::CREATED->getStatusCode());
        self::assertEquals(202, HttpStatus::ACCEPTED->getStatusCode());
        self::assertEquals(203, HttpStatus::NON_AUTHORITATIVE_INFORMATION->getStatusCode());
        self::assertEquals(204, HttpStatus::NO_CONTENT->getStatusCode());
        self::assertEquals(205, HttpStatus::RESET_CONTENT->getStatusCode());
        self::assertEquals(206, HttpStatus::PARTIAL_CONTENT->getStatusCode());
        self::assertEquals(207, HttpStatus::MULTI_STATUS->getStatusCode());
        self::assertEquals(208, HttpStatus::ALREADY_REPORTED->getStatusCode());
        self::assertEquals(214, HttpStatus::TRANSFORMATION_APPLIED->getStatusCode());
        self::assertEquals(226, HttpStatus::IM_USED->getStatusCode());
        self::assertEquals(299, HttpStatus::MISCELLANEOUS_PERSISTENT_WARNING->getStatusCode());
    }

    public function testCorrectRedirectionStatusCode()
    {
        self::assertEquals(300, HttpStatus::MULTIPLE_CHOICES->getStatusCode());
        self::assertEquals(301, HttpStatus::MOVED_PERMANENTLY->getStatusCode());
        self::assertEquals(302, HttpStatus::FOUND->getStatusCode());
        self::assertEquals(303, HttpStatus::SEE_OTHER->getStatusCode());
        self::assertEquals(304, HttpStatus::NOT_MODIFIED->getStatusCode());
        self::assertEquals(305, HttpStatus::USE_PROXY->getStatusCode());
        self::assertEquals(306, HttpStatus::SWITCH_PROXY->getStatusCode());
        self::assertEquals(307, HttpStatus::TEMPORARY_REDIRECT->getStatusCode());
        self::assertEquals(308, HttpStatus::PERMANENT_REDIRECT->getStatusCode());
    }

    public function testCorrectClientErrorStatusCode()
    {
        self::assertEquals(400, HttpStatus::BAD_REQUEST->getStatusCode());
        self::assertEquals(401, HttpStatus::UNAUTHORIZED->getStatusCode());
        self::assertEquals(402, HttpStatus::PAYMENT_REQUIRED->getStatusCode());
        self::assertEquals(403, HttpStatus::FORBIDDEN->getStatusCode());
        self::assertEquals(404, HttpStatus::NOT_FOUND->getStatusCode());
        self::assertEquals(405, HttpStatus::METHOD_NOT_ALLOWED->getStatusCode());
        self::assertEquals(406, HttpStatus::NOT_ACCEPTABLE->getStatusCode());
        self::assertEquals(407, HttpStatus::PROXY_AUTHENTICATION_REQUIRED->getStatusCode());
        self::assertEquals(408, HttpStatus::REQUEST_TIMEOUT->getStatusCode());
        self::assertEquals(409, HttpStatus::CONFLICT->getStatusCode());
        self::assertEquals(410, HttpStatus::GONE->getStatusCode());
        self::assertEquals(411, HttpStatus::LENGTH_REQUIRED->getStatusCode());
        self::assertEquals(412, HttpStatus::PRECONDITION_FAILED->getStatusCode());
        self::assertEquals(413, HttpStatus::PAYLOAD_TOO_LARGE->getStatusCode());
        self::assertEquals(414, HttpStatus::URI_TOO_LONG->getStatusCode());
        self::assertEquals(415, HttpStatus::UNSUPPORTED_MEDIA_TYPE->getStatusCode());
        self::assertEquals(416, HttpStatus::RANGE_NOT_SATISFIABLE->getStatusCode());
        self::assertEquals(417, HttpStatus::EXPECTATION_FAILED->getStatusCode());
        self::assertEquals(418, HttpStatus::IM_A_TEAPOT->getStatusCode());
        self::assertEquals(419, HttpStatus::PAGE_EXPIRED->getStatusCode());
        self::assertEquals(420, HttpStatus::METHOD_FAILURE->getStatusCode());
        self::assertEquals(421, HttpStatus::MISDIRECTED_REQUEST->getStatusCode());
        self::assertEquals(422, HttpStatus::UNPROCESSABLE_ENTITY->getStatusCode());
        self::assertEquals(423, HttpStatus::LOCKED->getStatusCode());
        self::assertEquals(424, HttpStatus::FAILED_DEPENDENCY->getStatusCode());
        self::assertEquals(425, HttpStatus::TOO_EARLY->getStatusCode());
        self::assertEquals(426, HttpStatus::UPGRADE_REQUIRED->getStatusCode());
        self::assertEquals(428, HttpStatus::PRECONDITION_REQUIRED->getStatusCode());
        self::assertEquals(429, HttpStatus::TOO_MANY_REQUESTS->getStatusCode());
        self::assertEquals(431, HttpStatus::REQUEST_HEADER_FIELDS_TOO_LARGE->getStatusCode());
        self::assertEquals(440, HttpStatus::LOGIN_TIMEOUT->getStatusCode());
        self::assertEquals(444, HttpStatus::NO_RESPONSE->getStatusCode());
        self::assertEquals(449, HttpStatus::RETRY_WITH->getStatusCode());
        self::assertEquals(450, HttpStatus::BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS->getStatusCode());
        self::assertEquals(451, HttpStatus::UNAVAILABLE_FOR_LEGAL_REASONS->getStatusCode());
        self::assertEquals(494, HttpStatus::REQUEST_HEADER_TOO_LARGE->getStatusCode());
        self::assertEquals(495, HttpStatus::SSL_CERTIFICATE_ERROR->getStatusCode());
        self::assertEquals(496, HttpStatus::SSL_CERTIFICATE_REQUIRED->getStatusCode());
        self::assertEquals(497, HttpStatus::HTTP_REQUEST_SENT_TO_HTTPS_PORT->getStatusCode());
        self::assertEquals(498, HttpStatus::INVALID_TOKEN->getStatusCode());
        self::assertEquals(499, HttpStatus::TOKEN_REQUIRED->getStatusCode());
    }

    public function testCorrectServerErrorStatusCode()
    {
        self::assertEquals(500, HttpStatus::INTERNAL_SERVER_ERROR->getStatusCode());
        self::assertEquals(501, HttpStatus::NOT_IMPLEMENTED->getStatusCode());
        self::assertEquals(502, HttpStatus::BAD_GATEWAY->getStatusCode());
        self::assertEquals(503, HttpStatus::SERVICE_UNAVAILABLE->getStatusCode());
        self::assertEquals(504, HttpStatus::GATEWAY_TIMEOUT->getStatusCode());
        self::assertEquals(505, HttpStatus::HTTP_VERSION_NOT_SUPPORTED->getStatusCode());
        self::assertEquals(506, HttpStatus::VARIANT_ALSO_NEGOTIATES->getStatusCode());
        self::assertEquals(507, HttpStatus::INSUFFICIENT_STORAGE->getStatusCode());
        self::assertEquals(508, HttpStatus::LOOP_DETECTED->getStatusCode());
        self::assertEquals(509, HttpStatus::BANDWIDTH_LIMIT_EXCEEDED->getStatusCode());
        self::assertEquals(510, HttpStatus::NOT_EXTENDED->getStatusCode());
        self::assertEquals(511, HttpStatus::NETWORK_AUTHENTICATION_REQUIRED->getStatusCode());
        self::assertEquals(520, HttpStatus::WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR->getStatusCode());
        self::assertEquals(521, HttpStatus::WEB_SERVER_IS_DOWN->getStatusCode());
        self::assertEquals(522, HttpStatus::CONNECTION_TIMED_OUT->getStatusCode());
        self::assertEquals(523, HttpStatus::ORIGIN_IS_UNREACHABLE->getStatusCode());
        self::assertEquals(524, HttpStatus::A_TIMEOUT_OCCURRED->getStatusCode());
        self::assertEquals(525, HttpStatus::SSL_HANDSHAKE_FAILED->getStatusCode());
        self::assertEquals(526, HttpStatus::INVALID_SSL_CERTIFICATE->getStatusCode());
        self::assertEquals(527, HttpStatus::RAILGUN_ERROR->getStatusCode());
        self::assertEquals(529, HttpStatus::SITE_IS_OVERLOADED->getStatusCode());
        self::assertEquals(530, HttpStatus::SITE_IS_FROZEN->getStatusCode());
        self::assertEquals(598, HttpStatus::NETWORK_READ_TIMEOUT_ERROR->getStatusCode());
        self::assertEquals(599, HttpStatus::NETWORK_CONNECT_TIMEOUT_ERROR->getStatusCode());
    }
}