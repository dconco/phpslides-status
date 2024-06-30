<?php

namespace PhpSlides\Interface;

use PhpSlides\StatusCode;
use PhpSlides\StatusText;
use PhpSlides\Enums\Response;

interface StatusInterface
{
   /**
    * @param string $responseType Set the Response Type for default API response
    */
   public function __construct (string $responseType = Response::JSON);

   public function getStatus (): int;

   public function getStatusText (): string;


   public function getMessage (): mixed;

   public function get (): string;

   public function getJson (): string;

   public function set (mixed $data, int $status = StatusCode::NO_CONTENT, string $statusText = StatusText::NO_CONTENT): void;

   public function setStatus (int $status): void;

   public function setStatusText (string $statusText): void;

   public function setMessage (mixed $message): void;

   public function error (array|string $data, int $status = StatusCode::INTERNAL_SERVER_ERROR): string;

   public function success (array|string $data, int $status = StatusCode::OK): string;
}