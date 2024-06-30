<?php

namespace PhpSlides\Interface;

use PhpSlides\Status\Response;

interface StatusInterface
{
   /**
    * @param string $responseType Set the Response Type for default API response
    */
   public function __construct (string $responseType = Response::JSON);
}