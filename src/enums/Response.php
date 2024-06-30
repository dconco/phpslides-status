<?php


namespace PhpSlides\Enums;

use DOMDocument;
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
      header('Content-Type: application/json');
      http_response_code($status);

      return json_encode($data);
   }
   public static function html (array $data = [], int $status = StatusCode::OK): string
   {
      header('Content-Type: text/html');
      http_response_code($status);

      $html = new DOMDocument();

      $ul = $html->createElement('ul');

      foreach ($data as $key => $value)
      {
         $li = $html->createElement('li');
         $li->textContent = $key . ': ' . $value;

         $ul->appendChild($li);
      }
      $html->appendChild($ul);

      return $html->saveHTML();
   }
   public static function csv (array $data = [], int $status = StatusCode::OK): string
   {
      header('Content-Type: text/csv');
      http_response_code($status);

      $csv = '';
      foreach ($data as $key => $value)
      {
         $csv .= $key . ',' . $value . "\n";
      }

      return $csv;
   }
   public static function xml (array $data = [], int $status = StatusCode::OK): string
   {
      header('Content-Type: text/xml');
      http_response_code($status);

      $xml = new DOMDocument('1.0', 'UTF-8');
      $root = $xml->createElement('root');

      foreach ($data as $key => $value)
      {
         $element = $xml->createElement($key, $value);
         $root->appendChild($element);
      }

      $xml->appendChild($root);

      return $xml->saveXML();
   }
   public static function text (array $data = [], int $status = StatusCode::UNSUPPORTED_MEDIA_TYPE): string
   {
      header('Content-Type: text/plain');
      http_response_code($status);

      return serialize($data);
   }
}