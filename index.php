<?php

use PhpSlides\Status;
use PhpSlides\StatusCode;
use PhpSlides\Http\Response;

include_once 'vendor/autoload.php';

$s = new Status(Response::CSV);
print_r($s->success([ 'key1' => 'value2' ], StatusCode::OK));