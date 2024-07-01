<?php

namespace PhpSlides;

use PhpSlides\Http\Response;
use PhpSlides\Interface\StatusInterface;

class Status implements StatusInterface
{
	protected int $status = StatusCode::NO_CONTENT;
	protected string $statusText = StatusText::NO_CONTENT;
	protected mixed $message = [];
	protected string $response;

	/**
	 * The constructor function initializes the response type based on the provided parameter, with a
	 * fallback to an unsupported media type status if the provided type is not valid.
	 * 
	 * @param string response The `response` parameter in the constructor function is a string that
	 * specifies the type of response. It can be one of the following values: `Response::JSON`,
	 * `Response::HTML`, `Response::CSV`, or `Response::XML`. If the provided `response` value is not one
	 * of
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

	/**
	 * The getStatus function in PHP sets the HTTP response code and returns the status.
	 * 
	 * @return int The `getStatus` function is returning the HTTP status code stored in the `->status`
	 * property. It also sets the HTTP response code using `http_response_code(->status)`.
	 */
	public function getStatus (): int
	{
		http_response_code($this->status);
		return $this->status;
	}

	/**
	 * The getStatusText function in PHP returns the response as a string.
	 * 
	 * @return string The `getStatusText` function is returning the value of the `` property of
	 * the object.
	 */
	public function getStatusText (): string
	{
		return $this->response;
	}

	/**
	 * This PHP function named getMessage returns the value of the message property.
	 * 
	 * @return mixed The `getMessage` function is returning the value of the `` property of the
	 * object. The return type is `mixed`, which means it can be of any data type.
	 */
	public function getMessage (): mixed
	{
		return $this->message;
	}

	/**
	 * The function `get` returns data in different formats based on the specified response type.
	 * 
	 * @return string|array The `get()` function returns either a string or an array based on the value of
	 * the `->response` property. The specific response format returned depends on the value of
	 * `->response` and includes JSON, HTML, XML, CSV, or a default array response.
	 */
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

	/**
	 * The function `getJson` returns a JSON-encoded string containing status information and sets
	 * appropriate HTTP headers.
	 * 
	 * @return string The `getJson` function returns a JSON-encoded string containing the status,
	 * statusText, and message properties of the object. It also sets the HTTP response code and headers
	 * before returning the JSON string.
	 */
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

	/**
	 * The set function in PHP sets the status, status text, and message data for an object.
	 * 
	 * @param mixed data The `data` parameter in the `set` function is a mixed type, which means it can
	 * accept values of different types (e.g., string, integer, array, object, etc.). This parameter is
	 * used to set the message data that will be stored in the object's `message` property
	 * @param int status The `status` parameter in the `set` function is used to set the HTTP status code
	 * for the response. It has a default value of `StatusCode::NO_CONTENT`, which is typically used when
	 * the response body is empty. You can override this default value by passing a different HTTP status
	 * code when
	 * @param string statusText The `statusText` parameter in the `set` function is a string parameter
	 * that represents the status text associated with the HTTP response status code. It is used to
	 * provide a human-readable description of the status code. In the provided code snippet, the default
	 * value for `statusText` is `Status
	 */
	public function set (mixed $data, int $status = StatusCode::NO_CONTENT, string $statusText = StatusText::NO_CONTENT): void
	{
		$this->status = $status;
		$this->statusText = $statusText;
		$this->message = $data;
	}

	/**
	 * This PHP function sets the status text for a class instance.
	 * 
	 * @param string statusText The `setStatusText` function is used to set the status text of an object.
	 * The parameter `` is a string that represents the new status text that you want to set
	 * for the object.
	 */
	public function setStatusText (string $statusText): void
	{
		$this->statusText = $statusText;
	}

	/**
	 * The setStatus function in PHP sets the status property of an object to a specified integer value.
	 * 
	 * @param int status The `setStatus` function takes an integer parameter `` and sets the
	 * `status` property of the object to the value of the `` parameter.
	 */
	public function setStatus (int $status): void
	{
		$this->status = $status;
	}

	/**
	 * The function setMessage sets the message property of an object to a given value.
	 * 
	 * @param mixed message The `setMessage` function takes a parameter named `` of type `mixed`,
	 * which means it can accept values of any data type. This parameter is used to set the value of the
	 * `message` property of the object or class instance where this function is called.
	 */
	public function setMessage (mixed $message): void
	{
		$this->message = $message;
	}

	/**
	 * This PHP function handles errors by formatting the error data based on the response type and status
	 * code.
	 * 
	 * @param array data The `data` parameter in the `error` function can accept either an array or a
	 * string. It is used to provide the error message or data that needs to be returned in the response.
	 * @param int status The `status` parameter in the `error` function is an optional integer parameter
	 * that represents the HTTP status code to be returned in the response. If not provided, the default
	 * value is `StatusCode::INTERNAL_SERVER_ERROR`.
	 * 
	 * @return string|array The `error` function is returning either a string or an array based on the
	 * type of data passed to it. The function processes the input data and returns a response based on
	 * the value of the `` property. The response can be in JSON, HTML, XML, CSV, or as a plain
	 * array.
	 */
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

	/**
	 * This PHP function returns a success response in various formats based on the specified response
	 * type.
	 * 
	 * @param array data The `data` parameter in the `success` function can be either an array or a
	 * string. It is wrapped in an array with the key 'success' before being returned based on the
	 * response type specified.
	 * @param int status The `status` parameter in the `success` function represents the HTTP status code
	 * that will be returned in the response. By default, it is set to `StatusCode::OK`, which typically
	 * corresponds to the HTTP status code 200 (OK). However, you can override this default value by
	 * providing a
	 * 
	 * @return string|array The `success` function is returning either a string or an array based on the
	 * type of response set in the class property `->response`. The function wraps the provided data
	 * in a 'success' key within an array and then returns the formatted response based on the response
	 * type. The specific response format returned depends on the value of `->response` which can be
	 * JSON, HTML, XML,
	 */
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