<?php

declare(strict_types=1);

namespace Rigsto\ApiHttpStatus;

enum HttpStatus: int
{
    /**
     * The server has received the request headers and the client should proceed to send the request body (in the case
     * of a request for which a body needs to be sent; for example, a POST request). Sending a large request body to a
     * server after a request has been rejected for inappropriate headers would be inefficient. To have a server check
     * the request's headers, a client must send "Expect: 100-continue" as a header in its initial request and receive a
     * 100 Continue status code in response before sending the body. If the client receives an error code such as 403
     * (Forbidden) or 405 (Method Not Allowed) then it should not send the request's body. The response "417 Expectation
     * Failed" indicates that the request should be repeated without the Expect header as it indicates that the server
     * does not support expectations (this is the case, for example, of HTTP/1.0 servers).
     */
    case CONTINUE = 100;

    /**
     * The requester has asked the server to switch protocols and the server has agreed to do so.
     */
    case SWITCHING_PROTOCOLS = 101;

    /**
     * A WebDAV request may contain many sub-requests involving file operations, requiring a long time to complete the
     * request. This code indicates that the server has received and is processing the request, but no response is
     * available yet. This prevents the client from timing out and assuming the request was lost.
     */
    case PROCESSING = 102;

    /**
     * Used to return some response headers before final HTTP message.
     */
    case EARLY_HINTS = 103;

    /**
     * The response provided by a cache is stale (the content's age exceeds a maximum age set by a Cache-Control header
     * or heuristically chosen lifetime).
     */
    case RESPONSE_IS_STALE = 110;

    /**
     * The cache was unable to validate the response, due to an inability to reach the origin server.
     */
    case RESPONSE_FAILED = 111;

    /**
     * The cache is intentionally disconnected from the rest of the network.
     */
    case DISCONNECTED_OPERATION = 112;

    /**
     * The cache heuristically chose a freshness lifetime greater than 24 hours and the response's age is greater
     * than 24 hours.
     */
    case HEURISTIC_EXPIRATION = 113;

    /**
     * Arbitrary, non-specific warning. The warning text may be logged or presented to the user.
     */
    case MISCELLANEOUS_WARNING = 199;

    /**
     * Standard response for successful HTTP requests. The actual response will depend on the request method used. In a
     * GET request, the response will contain an entity corresponding to the requested resource. In a POST request, the
     * response will contain an entity describing or containing the result of the action.
     */
    case OK = 200;

    /**
     * The request has been fulfilled, resulting in the creation of a new resource.
     */
    case CREATED = 201;

    /**
     * The request has been accepted for processing, but the processing has not been completed. The request might or
     * might not be eventually acted upon, and may be disallowed when processing occurs.
     */
    case ACCEPTED = 202;

    /**
     * The server is a transforming proxy (e.g. a Web accelerator) that received a 200 OK from its origin, but is
     * returning a modified version of the origin's response.
     */
    case NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * The server successfully processed the request and is not returning any content.
     */
    case NO_CONTENT = 204;

    /**
     * The server successfully processed the request, but is not returning any content. Unlike a 204 response, this
     * response requires that the requester reset the document view.
     */
    case RESET_CONTENT = 205;

    /**
     * The server is delivering only part of the resource (byte serving) due to a range header sent by the client. The
     * range header is used by HTTP clients to enable resuming of interrupted downloads, or split a download into
     * multiple simultaneous streams.
     */
    case PARTIAL_CONTENT = 206;

    /**
     * The message body that follows is an XML message and can contain a number of separate response codes, depending on
     * how many sub-requests were made.
     */
    case MULTI_STATUS = 207;

    /**
     * The members of a DAV binding have already been enumerated in a previous reply to this request, and are not being
     * included again.
     */
    case ALREADY_REPORTED = 208;

    /**
     * Added by a proxy if it applies any transformation to the representation, such as changing the content encoding,
     * media type or the like.
     */
    case TRANSFORMATION_APPLIED = 214;

    /**
     * The server has fulfilled a request for the resource, and the response is a representation of the result of one
     * or more instance-manipulations applied to the current instance.
     */
    case IM_USED = 226;

    /**
     * Same as 199, but indicating a persistent warning.
     */
    case MISCELLANEOUS_PERSISTENT_WARNING = 299;

    /**
     * Indicates multiple options for the resource from which the client may choose (via agent-driven content negotiation).
     * For example, this code could be used to present multiple video format options, to list files with different filename
     * extensions, or to suggest word-sense disambiguation.
     */
    case MULTIPLE_CHOICES = 300;

    /**
     * This and all future requests should be directed to the given URI.
     */
    case MOVED_PERMANENTLY = 301;

    /**
     * This is an example of industry practice contradicting the standard. The HTTP/1.0 specification (RFC 1945) required
     * the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"), but popular
     * browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and
     * 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status
     * code as if it were the 303.
     */
    case FOUND = 302;

    /**
     * The response to the request can be found under another URI using a GET method. When received in response to a
     * POST (or PUT/DELETE), the client should presume that the server has received the data and should issue a new
     * GET request to the given URI.
     */
    case SEE_OTHER = 303;

    /**
     * Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since
     * or If-None-Match. In such case, there is no need to retransmit the resource since the client still has a previously-
     * cached copy.
     */
    case NOT_MODIFIED = 304;

    /**
     * The requested resource is available only through a proxy, the address for which is provided in the response.
     * Many HTTP clients (such as Mozilla and Internet Explorer) do not correctly handle responses with this status code,
     * primarily for security reasons.
     */
    case USE_PROXY = 305;

    /**
     * No longer used. Originally meant "Subsequent requests should use the specified proxy."
     */
    case SWITCH_PROXY = 306;

    /**
     * In this case, the request should be repeated with another URI; however, future requests should still use the
     * original URI. In contrast to how 302 was historically implemented, the request method is not allowed to be changed
     * when reissuing the original request. For example, a POST request should be repeated using another POST request.
     */
    case TEMPORARY_REDIRECT = 307;

    /**
     * The request and all future requests should be repeated using another URI. 307 and 308 parallel the behaviors of
     * 302 and 301, but do not allow the HTTP method to change. So, for example, submitting a form to a permanently
     * redirected resource may continue smoothly.
     */
    case PERMANENT_REDIRECT = 308;

    /**
     * The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax,
     * size too large, invalid request message framing, or deceptive request routing).
     */
    case BAD_REQUEST = 400;

    /**
     * Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet
     * been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the
     * requested resource. See Basic access authentication and Digest access authentication. 401 semantically means
     * "unauthenticated",i.e. "you don't have permission to access this resource".
     */
    case UNAUTHORIZED = 401;

    /**
     * Reserved for future use. The original intention was that this code might be used as part of some form of digital
     * cash or micropayment scheme, as proposed, for example, by GNU Taler, but that has not yet happened, and this code
     * is not widely used. Google Developers API uses this status if a particular developer has exceeded the daily limit
     * on requests. Sipgate uses this code if an account does not have sufficient funds to start a call.[35] Shopify uses
     * this code when the store has not paid their fees and is temporarily disabled. Stripe uses this code for failed
     * payments where parameters were correct, for example blocked fraudulent payments.
     */
    case PAYMENT_REQUIRED = 402;

    /**
     * The request was a valid request, but the server is refusing to respond to it. Unlike a 401 Unauthorized response,
     * authenticating will make no difference.
     */
    case FORBIDDEN = 403;

    /**
     * The requested resource could not be found but may be available in the future. Subsequent requests by the client are
     * permissible.
     */
    case NOT_FOUND = 404;

    /**
     * A request method is not supported for the requested resource; for example, a GET request on a form which requires
     * data to be presented via POST, or a PUT request on a read-only resource.
     */
    case METHOD_NOT_ALLOWED = 405;

    /**
     * The requested resource is capable of generating only content not acceptable according to the Accept headers sent in
     * the request.
     */
    case NOT_ACCEPTABLE = 406;

    /**
     * The client must first authenticate itself with the proxy.
     */
    case PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * The server timed out waiting for the request. According to HTTP specifications: "The client did not produce a
     * request within the time that the server was prepared to wait. The client MAY repeat the request without modifications
     * at any later time."
     */
    case REQUEST_TIMEOUT = 408;

    /**
     * Indicates that the request could not be processed because of conflict in the request, such as an edit conflict.
     */
    case CONFLICT = 409;

    /**
     * Indicates that the resource requested is no longer available and will not be available again. This should be used
     * when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code,
     * the client should not request the resource in the future. Clients such as search engines should remove the resource
     * from their indices. Most use cases do not require clients and search engines to purge the resource, and a "404 Not
     * Found" may be used instead.
     */
    case GONE = 410;

    /**
     * The request did not specify the length of its content, which is required by the requested resource.
     */
    case LENGTH_REQUIRED = 411;

    /**
     * The server does not meet one of the preconditions that the requester put on the request.
     */
    case PRECONDITION_FAILED = 412;

    /**
     * The request is larger than the server is willing or able to process. Previously called "Request Entity Too Large".
     */
    case PAYLOAD_TOO_LARGE = 413;

    /**
     * The URI provided was too long for the server to process. Often the result of too much data being encoded as a query
     * string of a GET request, in which case it should be converted to a POST request. Called "Request-URI Too Long"
     * previously.
     */
    case URI_TOO_LONG = 414;

    /**
     * The request entity has a media type which the server or resource does not support. For example, the client
     * submitted a JPEG image file as image/png.
     */
    case UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * The client has asked for a portion of the file (byte serving), but the server cannot supply that portion. For
     * example, if the client asked for a part of the file that lies beyond the end of the file. Called "Requested Range Not
     * Satisfiable" previously.
     */
    case RANGE_NOT_SATISFIABLE = 416;

    /**
     * The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat
     * the request without modifications at any later time.
     */
    case EXPECTATION_FAILED = 417;

    /**
     * This code was defined in 1998 as one of the traditional IETF April Fools' jokes, in RFC 2324, Hyper Text Coffee
     * Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. The RFC specifies this code
     * should be returned by teapots requested to brew coffee. This HTTP status is used as an Easter egg in some websites,
     * such as Google.com's I'm a teapot easter egg.
     */
    case I_M_A_TEAPOT = 418;

    /**
     * Used by the Laravel Framework when a CSRF Token is missing or expired.
     */
    case PAGE_EXPIRED = 419;

    /**
     * Spring Boot:
     * A deprecated response used by the Spring Framework when a method has failed.
     *
     * Twitter:
     * Returned by version 1 of the Twitter Search and Trends API when the client is being rate limited; versions 1.1
     * and later use the 429 Too Many Requests response code instead. The phrase "Enhance your calm" comes from the 1993
     * movie Demolition Man, and its association with this number is likely a reference to cannabis.
     */
    case METHOD_FAILURE = 420;

    /**
     * The request was directed at a server that is not able to produce a response (for example because of connection
     * reuse).
     */
    case MISDIRECTED_REQUEST = 421;

    /**
     * The request was well-formed but was unable to be followed due to semantic errors.
     */
    case UNPROCESSABLE_ENTITY = 422;

    /**
     * The resource that is being accessed is locked.
     */
    case LOCKED = 423;

    /**
     * The request failed due to failure of a previous request (e.g., a PROPPATCH).
     */
    case FAILED_DEPENDENCY = 424;

    /**
     * Indicates that the server is unwilling to risk processing a request that might be replayed.
     */
    case TOO_EARLY = 425;

    /**
     * The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.
     */
    case UPGRADE_REQUIRED = 426;

    /**
     * The origin server requires the request to be conditional. Intended to prevent the 'lost update' problem, where a
     * client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has
     * modified the state on the server, leading to a conflict.
     */
    case PRECONDITION_REQUIRED = 428;

    /**
     * The user has sent too many requests in a given amount of time. Intended for use with rate-limiting schemes.
     */
    case TOO_MANY_REQUESTS = 429;

    /**
     * The server is unwilling to process the request because either an individual header field, or all the header fields
     * collectively, are too large.
     */
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * The client's session has expired and must log in again.
     */
    case LOGIN_TIMEOUT = 440;

    /**
     * Used internally to instruct the server to return no information to the client and close the connection immediately.
     */
    case NO_RESPONSE = 444;

    /**
     * The server cannot honour the request because the user has not provided the required information.
     */
    case RETRY_WITH = 449;

    /**
     * The Microsoft extension code indicated when Windows Parental Controls are turned on and are blocking access to
     * the requested webpage.
     */
    case BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;

    /**
     * A server operator has received a legal demand to deny access to a resource or to a set of resources that includes
     * the requested resource. The code 451 was chosen as a reference to the novel Fahrenheit 451.
     */
    case UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * Client sent too large request or too long header line.
     */
    case REQUEST_HEADER_TOO_LARGE = 494;

    /**
     * An expansion of the 400 Bad Request response code, used when the client has provided an invalid client certificate.
     */
    case SSL_CERTIFICATE_ERROR = 495;

    /**
     * An expansion of the 400 Bad Request response code, used when a client certificate is required but not provided.
     */
    case SSL_CERTIFICATE_REQUIRED = 496;

    /**
     * An expansion of the 400 Bad Request response code, used when the client has made a HTTP request to a port
     * listening for HTTPS requests.
     */
    case HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;

    /**
     * Returned by ArcGIS for Server. Code 498 indicates an expired or otherwise invalid token.
     */
    case INVALID_TOKEN = 498;

    /**
     * Returned by ArcGIS for Server. Code 499 indicates that a token is required but was not submitted.
     */
    case TOKEN_REQUIRED = 499;

    /**
     * A generic error message, given when an unexpected condition was encountered and no more specific message is
     * suitable.
     */
    case INTERNAL_SERVER_ERROR = 500;

    /**
     * The server either does not recognize the request method, or it lacks the ability to fulfill the request. Usually
     * this implies future availability (e.g., a new feature of a web-service API).
     */
    case NOT_IMPLEMENTED = 501;

    /**
     * The server was acting as a gateway or proxy and received an invalid response from the upstream server.
     */
    case BAD_GATEWAY = 502;

    /**
     * The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a
     * temporary state.
     */
    case SERVICE_UNAVAILABLE = 503;

    /**
     * The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.
     */
    case GATEWAY_TIMEOUT = 504;

    /**
     * The server does not support the HTTP protocol version used in the request.
     */
    case HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * Transparent content negotiation for the request results in a circular reference.
     */
    case VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * The server is unable to store the representation needed to complete the request.
     */
    case INSUFFICIENT_STORAGE = 507;

    /**
     * The server detected an infinite loop while processing the request.
     */
    case LOOP_DETECTED = 508;

    /**
     * The server has exceeded the bandwidth specified by the server administrator; this is often used by shared hosting
     * providers to limit the bandwidth of customers.
     */
    case BANDWIDTH_LIMIT_EXCEEDED = 509;

    /**
     * Further extensions to the request are required for the server to fulfill it.
     */
    case NOT_EXTENDED = 510;

    /**
     * The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control
     * access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting
     * full Internet access via a Wi-Fi hotspot).
     */
    case NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * The origin server returned an empty, unknown, or unexpected response to Cloudflare.
     */
    case WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR = 520;

    /**
     * The origin server refused connections from Cloudflare. Security solutions at the origin may be blocking
     * legitimate connections from certain Cloudflare IP addresses.
     */
    case WEB_SERVER_IS_DOWN = 521;

    /**
     * Cloudflare timed out contacting the origin server.
     */
    case CONNECTION_TIMED_OUT = 522;

    /**
     * Cloudflare could not reach the origin server; for example, if the DNS records for the origin server are incorrect
     * or missing.
     */
    case ORIGIN_IS_UNREACHABLE = 523;

    /**
     * Cloudflare was able to complete a TCP connection to the origin server, but did not receive a timely HTTP response.
     */
    case A_TIMEOUT_OCCURRED = 524;

    /**
     * Cloudflare could not negotiate a SSL/TLS handshake with the origin server.
     */
    case SSL_HANDSHAKE_FAILED = 525;

    /**
     * Cloudflare could not validate the SSL certificate on the origin web server. Also used by Cloud Foundry's gorouter.
     */
    case INVALID_SSL_CERTIFICATE = 526;

    /**
     * Error 527 indicates an interrupted connection between Cloudflare and the origin server's Railgun server.
     */
    case RAILGUN_ERROR = 527;

    /**
     * Used by Qualys in the SSLLabs server testing API to signal that the site can't process the request.
     */
    case SITE_IS_OVERLOADED = 529;

    /**
     * Used by the Pantheon web platform to indicate a site that has been frozen due to inactivity.
     */
    case SITE_IS_FROZEN = 530;

    /**
     * Used by some HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy.
     */
    case NETWORK_READ_TIMEOUT_ERROR = 598;

    /**
     * An error used by some HTTP proxies to signal a network connect timeout behind the proxy to a client in front of
     * the proxy.
     */
    case NETWORK_CONNECT_TIMEOUT_ERROR = 599;

}