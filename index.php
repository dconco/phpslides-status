<?php

use PhpSlides\Status;
use PhpSlides\StatusCode;

include_once 'vendor/autoload.php';

$s = new Status();
print_r($s->success([ 'key1' => 'value2' ], StatusCode::OK));