<?php


namespace PhpSlides\Status;

use PhpSlides\StatusCode;

class Response
{
   const JSON = 'JSON';
   const HTML = 'HTML';
   const CSV = 'CSV';
   const XML = 'XML';

   /**
    * Handle response to Json
    */
   public static function json (array $data = [], int $status = StatusCode::OK): string
   {
      return '';
   }
   public static function html (array $data = [], int $status = StatusCode::OK): string
   {
      return '';
   }
   public static function csv (array $data = [], int $status = StatusCode::OK): string
   {
      return '';
   }
   public static function xml (array $data = [], int $status = StatusCode::OK): string
   {
      return '';
   }
}