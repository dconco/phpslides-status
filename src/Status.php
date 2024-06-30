<?php

namespace PhpSlides;

use PhpSlides\Enums\Response;
use PhpSlides\Interface\StatusInterface;

class Status implements StatusInterface
{
	protected string $response;

	/**
	 * @param string $response Set the Response Type for default API response
	 */
	public function __construct (string $response = Response::JSON)
	{
		$responseTypes = [ Response::JSON, Response::HTML, Response::CSV, Response::XML ];

		if (!in_array($response, $responseTypes))
		{
			$this->response = StatusText::UNSUPPORTED_MEDIA_TYPE;
		}
		$this->response = $response;
	}
}