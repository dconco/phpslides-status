<?php

namespace PhpSlides\Interface;

use PhpSlides\Enums\ResponseType;

interface StatusInterface
{
   /**
    * @param string $responseType Set the Response Type for default API response
    */
   public function __construct (string $responseType = ResponseType::JSON);
}