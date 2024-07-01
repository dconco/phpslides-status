<?php

namespace PhpSlides\Http;

use DOMDocument;
use PhpSlides\StatusCode;
use PhpSlides\Enums\ResponseType;
use PhpSlides\Interface\ResponseInterface;

class Response implements ResponseInterface
{
	const JSON = ResponseType::JSON;
	const HTML = ResponseType::HTML;
	const CSV = ResponseType::CSV;
	const XML = ResponseType::XML;

	/**
	 * The function `json` in PHP sets the response header to indicate JSON content and returns the
	 * JSON-encoded data along with the specified HTTP status code.
	 * 
	 * @param array data The `data` parameter is an array that contains the data you want to encode as
	 * JSON. This data will be converted to a JSON string using the `json_encode` function before being
	 * returned by the `json` method.
	 * @param int status The `status` parameter in the `json` function is used to specify the HTTP status
	 * code that will be returned in the response. It has a default value of `StatusCode::OK`, which
	 * typically corresponds to the HTTP status code `200 OK`. This parameter allows you to customize the
	 * status code based
	 * 
	 * @return string The `json` method returns a JSON-encoded string representation of the provided data
	 * array.
	 */
	public static function json (
	 array $data = [],
	 int $status = StatusCode::OK,
	): string {
		header('Content-Type: application/json');
		http_response_code($status);

		return json_encode($data);
	}

	/**
	 * The function generates an HTML unordered list based on the provided data array with key-value
	 * pairs.
	 * 
	 * @param array data The `data` parameter in the `html` function is an array that contains key-value
	 * pairs. The keys are used as labels and the values are the corresponding data to be displayed in the
	 * HTML output.
	 * @param int status The `status` parameter in the `html` function represents the HTTP status code
	 * that will be set in the response header. It is of type integer and is set to a default value of
	 * `StatusCode::OK`. This parameter allows you to specify the HTTP status code to be returned in the
	 * response.
	 * 
	 * @return string The `html` function is returning an HTML string generated using the provided data
	 * array. The function sets the content type to text/html and the HTTP response code based on the
	 * status parameter. It then creates a DOMDocument object, generates a list (<ul>) element, and
	 * populates it with list items (<li>) based on the key-value pairs in the data array. If a value is
	 * an array
	 */
	public static function html (
	 array $data = [],
	 int $status = StatusCode::OK,
	): string {
		header('Content-Type: text/html');
		http_response_code($status);

		$html = new DOMDocument();

		$ul = $html->createElement('ul');

		foreach ($data as $key => $value)
		{
			if (is_array($value))
			{
				for ($i = 0; $i < count($value); $i++)
				{
					$li = $html->createElement('li');
					$li->textContent =
					 array_keys($value)[$i] . ':' . array_values($value)[$i];

					$ul->appendChild($li);
				}
			}
			else
			{
				$li = $html->createElement('li');
				$li->textContent = $key . ':' . $value;

				$ul->appendChild($li);
			}
		}
		$html->appendChild($ul);

		return $html->saveHTML();
	}

	/**
	 * The function generates a CSV string from an array of data and sets the appropriate HTTP headers.
	 * 
	 * @param array data The `csv` function you provided is used to generate a CSV string from the given
	 * data array. The data array should be structured in a way that each key-value pair represents a row
	 * in the CSV.
	 * @param int status The `status` parameter in the `csv` function is used to specify the HTTP status
	 * code that will be set in the response header. In the provided code snippet, the default value for
	 * the `status` parameter is `StatusCode::OK`. This means that if no status is provided when calling
	 * the
	 * 
	 * @return string A string containing CSV formatted data based on the input array provided.
	 */
	public static function csv (
	 array $data = [],
	 int $status = StatusCode::OK,
	): string {
		header('Content-Type: text/csv');
		http_response_code($status);

		$csv = '';
		foreach ($data as $key => $value)
		{
			if (is_array($value))
			{
				for ($i = 0; $i < count($value); $i++)
				{
					$csv .=
					 array_keys($value)[$i] .
					 ',' .
					 array_values($value)[$i] .
					 "\n";
				}
			}
			else
			{
				$csv .= $key . ',' . $value . "\n";
			}
		}

		return $csv;
	}

	/**
	 * The function generates an XML document based on the provided data array and HTTP status code.
	 * 
	 * @param array data The `data` parameter in the `xml` function is an array that contains the data you
	 * want to convert to XML format. Each key-value pair in the array will be converted into an XML
	 * element where the key becomes the element tag and the value becomes the element value.
	 * @param int status The `status` parameter in the `xml` function represents the HTTP status code that
	 * will be set in the response headers. It is of type integer and is set to a default value of
	 * `StatusCode::OK`. This parameter allows you to specify the HTTP status code for the response,
	 * indicating the success
	 * 
	 * @return string The `xml` function returns an XML string generated based on the provided data array.
	 * The XML string represents the data in a structured format with elements and values as specified in
	 * the input array.
	 */
	public static function xml (
	 array $data = [],
	 int $status = StatusCode::OK,
	): string {
		header('Content-Type: text/xml');
		http_response_code($status);

		$xml = new DOMDocument('1.0', 'UTF-8');
		$root = $xml->createElement('root');

		foreach ($data as $key => $value)
		{
			if (is_array($value))
			{
				for ($i = 0; $i < count($value); $i++)
				{
					$element = $xml->createElement(
					 array_keys($value)[$i],
					 array_values($value)[$i],
					);
					$root->appendChild($element);
				}
			}
			else
			{
				$element = $xml->createElement($key, $value);
				$root->appendChild($element);
			}
		}

		$xml->appendChild($root);

		return $xml->saveXML();
	}

	/**
	 * This PHP function sets the HTTP response status code and content type before returning an array.
	 * 
	 * @param array data The `data` parameter is an array that contains the data you want to return from
	 * the function. It has a default value of an empty array `[]`, which means if no data is provided
	 * when calling the function, it will return an empty array.
	 * @param int status The `status` parameter in the `array` function is used to specify the HTTP status
	 * code that will be returned in the response. In this case, the default value for the `status`
	 * parameter is `StatusCode::UNSUPPORTED_MEDIA_TYPE`.
	 * 
	 * @return array An array is being returned, which is typecasted from the input data array.
	 */
	public static function array(
	 array $data = [],
	 int $status = StatusCode::UNSUPPORTED_MEDIA_TYPE,
	): array {
		header('Content-Type: */*');
		http_response_code($status);

		return (array) $data;
	}
}