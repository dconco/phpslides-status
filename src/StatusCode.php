<?php

namespace PhpSlides;

/**
 * Class StatusCode
 * 
 * This class defines constants for HTTP status codes.
 * Each constant represents a specific HTTP response status.
 */
class StatusCode {
  /** @var int Success - OK */
  const OK = 200;

  /** @var int Success - Created */
  const CREATED = 201;

  /** @var int Success - Accepted */
  const ACCEPTED = 202;

  /** @var int Success - Non-Authoritative Information */
  const NON_AUTHORITATIVE_INFORMATION = 203;

  /** @var int Success - No Content */
  const NO_CONTENT = 204;

  /** @var int Success - Reset Content */
  const RESET_CONTENT = 205;

  /** @var int Success - Partial Content */
  const PARTIAL_CONTENT = 206;

  /** @var int Success - Multi-Status */
  const MULTI_STATUS = 207;

  /** @var int Success - Already Reported */
  const ALREADY_REPORTED = 208;

  /** @var int Success - IM Used */
  const IM_USED = 226;

  /** @var int Redirection - Multiple Choices */
  const MULTIPLE_CHOICES = 300;

  /** @var int Redirection - Moved Permanently */
  const MOVED_PERMANENTLY = 301;

  /** @var int Redirection - Found */
  const FOUND = 302;

  /** @var int Redirection - See Other */
  const SEE_OTHER = 303;

  /** @var int Redirection - Not Modified */
  const NOT_MODIFIED = 304;

  /** @var int Redirection - Use Proxy */
  const USE_PROXY = 305;

  /** @var int Redirection - Switch Proxy (Deprecated) */
  const SWITCH_PROXY = 306;

  /** @var int Redirection - Temporary Redirect */
  const TEMPORARY_REDIRECT = 307;

  /** @var int Redirection - Permanent Redirect */
  const PERMANENT_REDIRECT = 308;

  /** @var int Client Error - Bad Request */
  const BAD_REQUEST = 400;

  /** @var int Client Error - Unauthorized */
  const UNAUTHORIZED = 401;

  /** @var int Client Error - Payment Required */
  const PAYMENT_REQUIRED = 402;

  /** @var int Client Error - Forbidden */
  const FORBIDDEN = 403;

  /** @var int Client Error - Not Found */
  const NOT_FOUND = 404;

  /** @var int Client Error - Method Not Allowed */
  const METHOD_NOT_ALLOWED = 405;

  /** @var int Client Error - Not Acceptable */
  const NOT_ACCEPTABLE = 406;

  /** @var int Client Error - Proxy Authentication Required */
  const PROXY_AUTHENTICATION_REQUIRED = 407;

  /** @var int Client Error - Request Timeout */
  const REQUEST_TIMEOUT = 408;

  /** @var int Client Error - Conflict */
  const CONFLICT = 409;

  /** @var int Client Error - Gone */
  const GONE = 410;

  /** @var int Client Error - Length Required */
  const LENGTH_REQUIRED = 411;

  /** @var int Client Error - Precondition Failed */
  const PRECONDITION_FAILED = 412;

  /** @var int Client Error - Payload Too Large */
  const PAYLOAD_TOO_LARGE = 413;

  /** @var int Client Error - URI Too Long */
  const URI_TOO_LONG = 414;

  /** @var int Client Error - Unsupported Media Type */
  const UNSUPPORTED_MEDIA_TYPE = 415;

  /** @var int Client Error - Requested Range Not Satisfiable */
  const REQUESTED_RANGE_NOT_SATISFIABLE = 416;

  /** @var int Client Error - Expectation Failed */
  const EXPECTATION_FAILED = 417;

  /** @var int Client Error - I'm a teapot (Easter egg) */
  const IM_A_TEAPOT = 418;

  /** @var int Client Error - Misdirected Request */
  const MISDIRECTED_REQUEST = 421;

  /** @var int Client Error - Unprocessable Entity */
  const UNPROCESSABLE_ENTITY = 422;

  /** @var int Client Error - Locked */
  const LOCKED = 423;

  /** @var int Client Error - Failed Dependency */
  const FAILED_DEPENDENCY = 424;

  /** @var int Client Error - Too Early */
  const TOO_EARLY = 425;

  /** @var int Client Error - Upgrade Required */
  const UPGRADE_REQUIRED = 426;

  /** @var int Client Error - Precondition Required */
  const PRECONDITION_REQUIRED = 428;

  /** @var int Client Error - Too Many Requests */
  const TOO_MANY_REQUESTS = 429;

  /** @var int Client Error - Request Header Fields Too Large */
  const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

  /** @var int Client Error - Unavailable For Legal Reasons */
  const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

  /** @var int Server Error - Internal Server Error */
  const INTERNAL_SERVER_ERROR = 500;

  /** @var int Server Error - Not Implemented */
  const NOT_IMPLEMENTED = 501;

  /** @var int Server Error - Bad Gateway */
  const BAD_GATEWAY = 502;

  /** @var int Server Error - Service Unavailable */
  const SERVICE_UNAVAILABLE = 503;

  /** @var int Server Error - Gateway Timeout */
  const GATEWAY_TIMEOUT = 504;

  /** @var int Server Error - HTTP Version Not Supported */
  const HTTP_VERSION_NOT_SUPPORTED = 505;

  /** @var int Server Error - Variant Also Negotiates */
  const VARIANT_ALSO_NEGOTIATES = 506;

  /** @var int Server Error - Insufficient Storage */
  const INSUFFICIENT_STORAGE = 507;

  /** @var int Server Error - Loop Detected */
  const LOOP_DETECTED = 508;

  /** @var int Server Error - Bandwidth Limit Exceeded */
  const BANDWIDTH_LIMIT_EXCEEDED = 509;

  /** @var int Server Error - Not Extended */
  const NOT_EXTENDED = 510;

  /** @var int Server Error - Network Authentication Required */
  const NETWORK_AUTHENTICATION_REQUIRED = 511;
}