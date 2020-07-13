<?php
/**
 * ToutiaoVideoDataApi
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * 通过头条视频id批量获取已分享视频数据信息
 *
 * OpenAPI spec version: 1.0.0
 * 
 */
/**
 * NOTE: 由抖音小开自动生成，请勿修改
 */

namespace Douyin\Open\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Douyin\Open\ApiException;
use Douyin\Open\Configuration;
use Douyin\Open\HeaderSelector;
use Douyin\Open\ObjectSerializer;

/**
 * ToutiaoVideoDataApi Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class ToutiaoVideoDataApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation toutiaoVideoDataPost
     *
     * 批量获取视频数据信息
     *
     * @param  \Douyin\Open\Model\ToutiaoVideoDataBody $body body (required)
     * @param  string $open_id 通过/oauth/access_token/获取，用户唯一标志 (required)
     * @param  string $access_token 调用/oauth/access_token/生成的token，此token需要用户授权。 (required)
     *
     * @throws \Douyin\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Douyin\Open\Model\ToutiaoVideoDataResponse
     */
    public function toutiaoVideoDataPost($body, $open_id, $access_token)
    {
        list($response) = $this->toutiaoVideoDataPostWithHttpInfo($body, $open_id, $access_token);
        return $response;
    }

    /**
     * Operation toutiaoVideoDataPostWithHttpInfo
     *
     * 批量获取视频数据信息
     *
     * @param  \Douyin\Open\Model\ToutiaoVideoDataBody $body (required)
     * @param  string $open_id 通过/oauth/access_token/获取，用户唯一标志 (required)
     * @param  string $access_token 调用/oauth/access_token/生成的token，此token需要用户授权。 (required)
     *
     * @throws \Douyin\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Douyin\Open\Model\ToutiaoVideoDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function toutiaoVideoDataPostWithHttpInfo($body, $open_id, $access_token)
    {
        $returnType = '\Douyin\Open\Model\ToutiaoVideoDataResponse';
        $request = $this->toutiaoVideoDataPostRequest($body, $open_id, $access_token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
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
                        '\Douyin\Open\Model\ToutiaoVideoDataResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'toutiaoVideoDataPost'
     *
     * @param  \Douyin\Open\Model\ToutiaoVideoDataBody $body (required)
     * @param  string $open_id 通过/oauth/access_token/获取，用户唯一标志 (required)
     * @param  string $access_token 调用/oauth/access_token/生成的token，此token需要用户授权。 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function toutiaoVideoDataPostRequest($body, $open_id, $access_token)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling toutiaoVideoDataPost'
            );
        }
        // verify the required parameter 'open_id' is set
        if ($open_id === null || (is_array($open_id) && count($open_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $open_id when calling toutiaoVideoDataPost'
            );
        }
        // verify the required parameter 'access_token' is set
        if ($access_token === null || (is_array($access_token) && count($access_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $access_token when calling toutiaoVideoDataPost'
            );
        }

        $resourcePath = '/toutiao/video/data/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($open_id !== null) {
            $queryParams['open_id'] = ObjectSerializer::toQueryValue($open_id);
        }
        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = ObjectSerializer::toQueryValue($access_token);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
