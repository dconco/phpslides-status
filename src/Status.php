<?php

namespace PhpSlides;

use PhpSlides\Http\Response;
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

	public function get (): string|array
	{
		$data = [
		 'status' => $this->status,
		 'statusText' => $this->statusText,
		 'message' => $this->message
		 ];

		switch ($this->response)
		{
			case (Response::JSON):
				return Response::json($data, $this->status);
			case (Response::HTML):
				return Response::html($data, $this->status);
			case (Response::XML):
				return Response::xml($data, $this->status);
			case (Response::CSV):
				return Response::csv($data, $this->status);
			default:
				return Response::array($data, $this->status);
		}
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

	public function error (array|string $data, int $status = StatusCode::INTERNAL_SERVER_ERROR): string|array
	{
		$data = [ 'error' => $data ];

		switch ($this->response)
		{
			case (Response::JSON):
				return Response::json($data, $status);
			case (Response::HTML):
				return Response::html($data, $status);
			case (Response::XML):
				return Response::xml($data, $status);
			case (Response::CSV):
				return Response::csv($data, $status);
			default:
				return Response::array($data, $status);
		}
	}

	public function success (array|string $data, int $status = StatusCode::OK): string|array
	{
		$data = [ 'success' => $data ];

		switch ($this->response)
		{
			case (Response::JSON):
				return Response::json($data, $status);
			case (Response::HTML):
				return Response::html($data, $status);
			case (Response::XML):
				return Response::xml($data, $status);
			case (Response::CSV):
				return Response::csv($data, $status);
			default:
				return Response::array($data, $status);
		}
	}
}