<?php

use PHPUnit\Framework\TestCase;
use PhpSlides\StatusCode;

include_once "autoload.php";

class StatusTest extends TestCase
{
   function testOK()
   {
      $this->assertSame(200, StatusCode::OK);
   }
}
