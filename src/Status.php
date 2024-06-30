<?php

namespace PhpSlides;

use PhpSlides\Enums\Response;
use PhpSlides\Interface\StatusInterface;

class Status implements StatusInterface
{

	public int $status = StatusCode::NO_CONTENT;
	public string $statusText = StatusText::NO_CONTENT;
	public mixed $message = [];
	public string $response;

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

	// Getters

	public function getStatus (): int
	{
		http_response_code($this->status);
		return $this->status;
	}
	public function getStatusText (): string
	{
		return $this->response;
	}

	public function getMessage (): mixed
	{
		return $this->message;
	}

	public function get (): string
	{
		$data = [
		 'status' => $this->status,
		 'statusText' => $this->statusText,
		 'message' => $this->message
		 ];

		switch ($this->response)
		{
			case (Response::JSON):
				$response = Response::json($data, $this->status);
			case (Response::HTML):
				$response = Response::html($data, $this->status);
			case (Response::XML):
				$response = Response::xml($data, $this->status);
			case (Response::CSV):
				$response = Response::csv($data, $this->status);
			default:
				$response = Response::text($data, $this->status);
		}

		return $response;
	}

	public function getJson (): string
	{
		$status = [
		  'status' => $this->status,
		  'statusText' => $this->statusText,
		  'message' => $this->message
		];

		http_response_code($this->status);
		header("HTTP/1.1 {$this->status} {$this->statusText}");
		header("Content-Type: application/json");

		return json_encode($status);
	}

	// Setters
	public function set (mixed $data, int $status = StatusCode::NO_CONTENT, string $statusText = StatusText::NO_CONTENT): void
	{
		$this->status = $status;
		$this->statusText = $statusText;
		$this->message = $data;
	}

	public function setStatusText (string $statusText): void
	{
		$this->statusText = $statusText;
	}

	public function setStatus (int $status): void
	{
		$this->status = $status;
	}

	public function setMessage (mixed $message): void
	{
		$this->message = $message;
	}

	public function error (array|string $data, int $status = StatusCode::INTERNAL_SERVER_ERROR): string
	{
		$data = [ 'error' => $data ];

		switch ($this->response)
		{
			case (Response::JSON):
				$response = Response::json($data, $status);
			case (Response::HTML):
				$response = Response::html($data, $status);
			case (Response::XML):
				$response = Response::xml($data, $status);
			case (Response::CSV):
				$response = Response::csv($data, $status);
			default:
				$response = Response::text($data, $status);
		}

		return $response;
	}

	public function success (array|string $data, int $status = StatusCode::OK): string
	{
		$data = [ 'success' => $data ];

		switch ($this->response)
		{
			case (Response::JSON):
				$response = Response::json($data, $status);
			case (Response::HTML):
				$response = Response::html($data, $status);
			case (Response::XML):
				$response = Response::xml($data, $status);
			case (Response::CSV):
				$response = Response::csv($data, $status);
			default:
				$response = Response::text($data, $status);
		}

		return $response;
	}
}