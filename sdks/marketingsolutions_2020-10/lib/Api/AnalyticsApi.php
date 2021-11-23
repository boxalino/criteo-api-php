<?php
/**
 * AnalyticsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2020_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2020_10\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use criteo\api\marketingsolutions\v2020_10\ApiException;
use criteo\api\marketingsolutions\v2020_10\Configuration;
use criteo\api\marketingsolutions\v2020_10\HeaderSelector;
use criteo\api\marketingsolutions\v2020_10\ObjectSerializer;

/**
 * AnalyticsApi Class Doc Comment
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2020_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AnalyticsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAdsetReport
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\StatisticsReportQueryMessage $statistics_report_query_message statistics_report_query_message (optional)
     *
     * @throws \criteo\api\marketingsolutions\v2020_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage
     */
    public function getAdsetReport($statistics_report_query_message = null)
    {
        list($response) = $this->getAdsetReportWithHttpInfo($statistics_report_query_message);
        return $response;
    }

    /**
     * Operation getAdsetReportWithHttpInfo
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\StatisticsReportQueryMessage $statistics_report_query_message (optional)
     *
     * @throws \criteo\api\marketingsolutions\v2020_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdsetReportWithHttpInfo($statistics_report_query_message = null)
    {
        $request = $this->getAdsetReportRequest($statistics_report_query_message);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAdsetReportAsync
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\StatisticsReportQueryMessage $statistics_report_query_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdsetReportAsync($statistics_report_query_message = null)
    {
        return $this->getAdsetReportAsyncWithHttpInfo($statistics_report_query_message)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdsetReportAsyncWithHttpInfo
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\StatisticsReportQueryMessage $statistics_report_query_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdsetReportAsyncWithHttpInfo($statistics_report_query_message = null)
    {
        $returnType = 'string';
        $request = $this->getAdsetReportRequest($statistics_report_query_message);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAdsetReport'
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\StatisticsReportQueryMessage $statistics_report_query_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAdsetReportRequest($statistics_report_query_message = null)
    {

        $resourcePath = '/2021-10/statistics/report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($statistics_report_query_message)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($statistics_report_query_message));
            } else {
                $httpBody = $statistics_report_query_message;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTransactionsReport
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransactionsReportQueryDataMessage $transactions_report_query_data_message transactions_report_query_data_message (optional)
     *
     * @throws \criteo\api\marketingsolutions\v2020_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage
     */
    public function getTransactionsReport($transactions_report_query_data_message = null)
    {
        list($response) = $this->getTransactionsReportWithHttpInfo($transactions_report_query_data_message);
        return $response;
    }

    /**
     * Operation getTransactionsReportWithHttpInfo
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransactionsReportQueryDataMessage $transactions_report_query_data_message (optional)
     *
     * @throws \criteo\api\marketingsolutions\v2020_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionsReportWithHttpInfo($transactions_report_query_data_message = null)
    {
        $request = $this->getTransactionsReportRequest($transactions_report_query_data_message);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTransactionsReportAsync
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransactionsReportQueryDataMessage $transactions_report_query_data_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionsReportAsync($transactions_report_query_data_message = null)
    {
        return $this->getTransactionsReportAsyncWithHttpInfo($transactions_report_query_data_message)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTransactionsReportAsyncWithHttpInfo
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransactionsReportQueryDataMessage $transactions_report_query_data_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionsReportAsyncWithHttpInfo($transactions_report_query_data_message = null)
    {
        $returnType = 'string';
        $request = $this->getTransactionsReportRequest($transactions_report_query_data_message);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTransactionsReport'
     *
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransactionsReportQueryDataMessage $transactions_report_query_data_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTransactionsReportRequest($transactions_report_query_data_message = null)
    {

        $resourcePath = '/2021-10/transactions/report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($transactions_report_query_data_message)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($transactions_report_query_data_message));
            } else {
                $httpBody = $transactions_report_query_data_message;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTransparencyReport
     *
     * @param  int $advertiser_id The advertiser id to fetch the transparency data. (required)
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransparencyQueryMessage $transparency_query_message transparency_query_message (optional)
     *
     * @throws \criteo\api\marketingsolutions\v2020_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \criteo\api\marketingsolutions\v2020_10\Model\TransparencyReportDataMessage|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage
     */
    public function getTransparencyReport($advertiser_id, $transparency_query_message = null)
    {
        list($response) = $this->getTransparencyReportWithHttpInfo($advertiser_id, $transparency_query_message);
        return $response;
    }

    /**
     * Operation getTransparencyReportWithHttpInfo
     *
     * @param  int $advertiser_id The advertiser id to fetch the transparency data. (required)
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransparencyQueryMessage $transparency_query_message (optional)
     *
     * @throws \criteo\api\marketingsolutions\v2020_10\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \criteo\api\marketingsolutions\v2020_10\Model\TransparencyReportDataMessage|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage|\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransparencyReportWithHttpInfo($advertiser_id, $transparency_query_message = null)
    {
        $request = $this->getTransparencyReportRequest($advertiser_id, $transparency_query_message);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\criteo\api\marketingsolutions\v2020_10\Model\TransparencyReportDataMessage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2020_10\Model\TransparencyReportDataMessage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\criteo\api\marketingsolutions\v2020_10\Model\TransparencyReportDataMessage';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2020_10\Model\TransparencyReportDataMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\marketingsolutions\v2020_10\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTransparencyReportAsync
     *
     * @param  int $advertiser_id The advertiser id to fetch the transparency data. (required)
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransparencyQueryMessage $transparency_query_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransparencyReportAsync($advertiser_id, $transparency_query_message = null)
    {
        return $this->getTransparencyReportAsyncWithHttpInfo($advertiser_id, $transparency_query_message)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTransparencyReportAsyncWithHttpInfo
     *
     * @param  int $advertiser_id The advertiser id to fetch the transparency data. (required)
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransparencyQueryMessage $transparency_query_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransparencyReportAsyncWithHttpInfo($advertiser_id, $transparency_query_message = null)
    {
        $returnType = '\criteo\api\marketingsolutions\v2020_10\Model\TransparencyReportDataMessage';
        $request = $this->getTransparencyReportRequest($advertiser_id, $transparency_query_message);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTransparencyReport'
     *
     * @param  int $advertiser_id The advertiser id to fetch the transparency data. (required)
     * @param  \criteo\api\marketingsolutions\v2020_10\Model\TransparencyQueryMessage $transparency_query_message (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTransparencyReportRequest($advertiser_id, $transparency_query_message = null)
    {
        // verify the required parameter 'advertiser_id' is set
        if ($advertiser_id === null || (is_array($advertiser_id) && count($advertiser_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $advertiser_id when calling getTransparencyReport'
            );
        }

        $resourcePath = '/2021-10/log-level/advertisers/{advertiser-id}/report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($advertiser_id !== null) {
            $resourcePath = str_replace(
                '{' . 'advertiser-id' . '}',
                ObjectSerializer::toPathValue($advertiser_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($transparency_query_message)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($transparency_query_message));
            } else {
                $httpBody = $transparency_query_message;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
