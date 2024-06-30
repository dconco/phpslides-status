<?php

use PhpSlides\Status;
use PhpSlides\Enums\ResponseType;

include_once 'vendor/autoload.php';

$s = new Status();
print_r($s->responseType);
