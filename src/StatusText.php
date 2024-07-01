<?php

namespace PhpSlides;

/**
 * Class StatusText
 * 
 * This class defines constants for HTTP status text.
 * Each constant represents a specific HTTP response status.
 * 
 * HTTP status text categorized into Success, Redirection, Client Error, and Server Error.
 */
class StatusText
{
   /** @var string Informational - Continue */
   const CONTINUE = 'CONTINUE';

   /** @var string Informational - Switching Protocols */
   const SWITCHING_PROTOCOLS = 'SWITCHING_PROTOCOLS';

   /** @var string Informational - Processing */
   const PROCESSING = 'PROCESSING';

   /** @var string Success - OK */
   const OK = "OK";

   /** @var string Success - Created */
   const CREATED = "CREATED";

   /** @var string Success - Accepted */
   const ACCEPTED = "ACCEPTED";

   /** @var string Success - Non-Authoritative Information */
   const NON_AUTHORITATIVE_INFORMATION = "NON_AUTHORITATIVE_INFORMATION";

   /** @var string Success - No Content */
   const NO_CONTENT = "NO_CONTENT";

   /** @var string Success - Reset Content */
   const RESET_CONTENT = "RESET_CONTENT";

   /** @var string Success - Partial Content */
   const PARTIAL_CONTENT = "PARTIAL_CONTENT";

   /** @var string Success - Multi-Status */
   const MULTI_STATUS = "MULTI_STATUS";

   /** @var string Success - Already Reported */
   const ALREADY_REPORTED = "ALREADY_REPORTED";

   /** @var string Success - IM Used */
   const IM_USED = "IM_USED";

   /** @var string Redirection - Multiple Choices */
   const MULTIPLE_CHOICES = "MULTIPLE_CHOICES";

   /** @var string Redirection - Moved Permanently */
   const MOVED_PERMANENTLY = "MOVED_PERMANENTLY";

   /** @var string Redirection - Found */
   const FOUND = "FOUND";

   /** @var string Redirection - See Other */
   const SEE_OTHER = "SEE_OTHER";

   /** @var string Redirection - Not Modified */
   const NOT_MODIFIED = "NOT_MODIFIED";

   /** @var string Redirection - Use Proxy */
   const USE_PROXY = "USE_PROXY";

   /** @var string Redirection - Switch Proxy (Deprecated) */
   const SWITCH_PROXY = "SWITCH_PROXY";

   /** @var string Redirection - Temporary Redirect */
   const TEMPORARY_REDIRECT = "TEMPORARY_REDIRECT";

   /** @var string Redirection - Permanent Redirect */
   const PERMANENT_REDIRECT = "PERMANENT_REDIRECT";

   /** @var string Client Error - Bad Request */
   const BAD_REQUEST = "BAD_REQUEST";

   /** @var string Client Error - Unauthorized */
   const UNAUTHORIZED = "UNAUTHORIZED";

   /** @var string Client Error - Payment Required */
   const PAYMENT_REQUIRED = "PAYMENT_REQUIRED";

   /** @var string Client Error - Forbidden */
   const FORBIDDEN = "FORBIDDEN";

   /** @var string Client Error - Not Found */
   const NOT_FOUND = "NOT_FOUND";

   /** @var string Client Error - Method Not Allowed */
   const METHOD_NOT_ALLOWED = "METHOD_NOT_ALLOWED";

   /** @var string Client Error - Not Acceptable */
   const NOT_ACCEPTABLE = "NOT_ACCEPTABLE";

   /** @var string Client Error - Proxy Authentication Required */
   const PROXY_AUTHENTICATION_REQUIRED = "PROXY_AUTHENTICATION_REQUIRED";

   /** @var string Client Error - Request Timeout */
   const REQUEST_TIMEOUT = "REQUEST_TIMEOUT";

   /** @var string Client Error - Conflict */
   const CONFLICT = "CONFLICT";

   /** @var string Client Error - Gone */
   const GONE = "GONE";

   /** @var string Client Error - Length Required */
   const LENGTH_REQUIRED = "LENGTH_REQUIRED";

   /** @var string Client Error - Precondition Failed */
   const PRECONDITION_FAILED = "PRECONDITION_FAILED";

   /** @var string Client Error - Payload Too Large */
   const PAYLOAD_TOO_LARGE = "PAYLOAD_TOO_LARGE";

   /** @var string Client Error - URI Too Long */
   const URI_TOO_LONG = "URI_TOO_LONG";

   /** @var string Client Error - Unsupported Media Type */
   const UNSUPPORTED_MEDIA_TYPE = "UNSUPPORTED_MEDIA_TYPE";

   /** @var string Client Error - Requested Range Not Satisfiable */
   const REQUESTED_RANGE_NOT_SATISFIABLE = "REQUESTED_RANGE_NOT_SATISFIABLE";

   /** @var string Client Error - Expectation Failed */
   const EXPECTATION_FAILED = "EXPECTATION_FAILED";

   /** @var string Client Error - I'm a teapot (Easter egg) */
   const IM_A_TEAPOT = "IM_A_TEAPOT";

   /** @var string Client Error - Misdirected Request */
   const MISDIRECTED_REQUEST = "MISDIRECTED_REQUEST";

   /** @var string Client Error - Unprocessable Entity */
   const UNPROCESSABLE_ENTITY = "UNPROCESSABLE_ENTITY";

   /** @var string Client Error - Locked */
   const LOCKED = "LOCKED";

   /** @var string Client Error - Failed Dependency */
   const FAILED_DEPENDENCY = "FAILED_DEPENDENCY";

   /** @var string Client Error - Too Early */
   const TOO_EARLY = "TOO_EARLY";

   /** @var string Client Error - Upgrade Required */
   const UPGRADE_REQUIRED = "UPGRADE_REQUIRED";

   /** @var string Client Error - Precondition Required */
   const PRECONDITION_REQUIRED = "PRECONDITION_REQUIRED";

   /** @var string Client Error - Too Many Requests */
   const TOO_MANY_REQUESTS = "TOO_MANY_REQUESTS";

   /** @var string Client Error - Request Header Fields Too Large */
   const REQUEST_HEADER_FIELDS_TOO_LARGE = "REQUEST_HEADER_FIELDS_TOO_LARGE";

   /** @var string Client Error - Unavailable For Legal Reasons */
   const UNAVAILABLE_FOR_LEGAL_REASONS = "UNAVAILABLE_FOR_LEGAL_REASONS";

   /** @var string Server Error - stringernal Server Error */
   const stringERNAL_SERVER_ERROR = "stringERNAL_SERVER_ERROR";

   /** @var string Server Error - Not Implemented */
   const NOT_IMPLEMENTED = "NOT_IMPLEMENTED";

   /** @var string Server Error - Bad Gateway */
   const BAD_GATEWAY = "BAD_GATEWAY";

   /** @var string Server Error - Service Unavailable */
   const SERVICE_UNAVAILABLE = "SERVICE_UNAVAILABLE";

   /** @var string Server Error - Gateway Timeout */
   const GATEWAY_TIMEOUT = "GATEWAY_TIMEOUT";

   /** @var string Server Error - HTTP Version Not Supported */
   const HTTP_VERSION_NOT_SUPPORTED = "HTTP_VERSION_NOT_SUPPORTED";

   /** @var string Server Error - Variant Also Negotiates */
   const VARIANT_ALSO_NEGOTIATES = "VARIANT_ALSO_NEGOTIATES";

   /** @var string Server Error - Insufficient Storage */
   const INSUFFICIENT_STORAGE = "INSUFFICIENT_STORAGE";

   /** @var string Server Error - Loop Detected */
   const LOOP_DETECTED = "LOOP_DETECTED";

   /** @var string Server Error - Bandwidth Limit Exceeded */
   const BANDWIDTH_LIMIT_EXCEEDED = "BANDWIDTH_LIMIT_EXCEEDED";

   /** @var string Server Error - Not Extended */
   const NOT_EXTENDED = "NOT_EXTENDED";

   /** @var string Server Error - Network Authentication Required */
   const NETWORK_AUTHENTICATION_REQUIRED = "NETWORK_AUTHENTICATION_REQUIRED";
}