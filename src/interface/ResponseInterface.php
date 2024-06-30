<?php

namespace PhpSlides\Interface;

use PhpSlides\StatusCode;
use PhpSlides\Enums\ResponseType;

interface ResponseInterface
{
	const JSON = ResponseType::JSON;
	const HTML = ResponseType::HTML;
	const CSV = ResponseType::CSV;
	const XML = ResponseType::XML;

	/**
	 * Handle response to Json
	 */
	public static function json(
		array $data = [],
		int $status = StatusCode::OK,
	): string;
	
	public static function html(
		array $data = [],
		int $status = StatusCode::OK,
	): string;
	
	
	public static function csv(
		array $data = [],
		int $status = StatusCode::OK,
	): string;
	
	public static function xml(
		array $data = [],
		int $status = StatusCode::OK,
	): string;
	
	public static function array(
		array $data = [],
		int $status = StatusCode::UNSUPPORTED_MEDIA_TYPE,
	): array;
}
