<?php

namespace PhpSlides;

use PhpSlides\Enums\ResponseType;
use PhpSlides\Interface\StatusInterface;

class Status implements StatusInterface
{
	public string $responseType;

	/**
	 * @param string $responseType Set the Response Type for default API response
	 */
	public function __construct (string $responseType = ResponseType::JSON)
	{
		$this->responseType = $responseType;
	}
}