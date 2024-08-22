<?php

namespace PhpSlides\Enums;

enum ResponseType: string
{
	const JSON = 'JSON';
	const HTML = 'HTML';
	const CSV = 'CSV';
	const XML = 'XML';
}