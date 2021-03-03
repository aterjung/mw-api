<?php
/**
 * DSGVOKontakteApi
 * PHP version 7.2
 *
 * @category Class
 * @package  MittwaldApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public API
 *
 * Schnittstellen für Mittwald-Kunden
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MittwaldApi\Functions;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MittwaldApi\ApiException;
use MittwaldApi\Configuration;
use MittwaldApi\HeaderSelector;
use MittwaldApi\ObjectSerializer;

/**
 * DSGVOKontakteApi Class Doc Comment
 *
 * @category Class
 * @package  MittwaldApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DSGVOKontakteApi
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
    public function setHostIndex($hostIndex)
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
     * Operation createGDPRContact
     *
     * Kontakt - Adressdaten anlegen
     *
     * @param  \MittwaldApi\Model\GDPRContact $create_gdpr_contact_request Die Adressdaten (required)
     *
     * @throws \MittwaldApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MittwaldApi\Model\GDPRContact
     */
    public function createGDPRContact($create_gdpr_contact_request)
    {
        list($response) = $this->createGDPRContactWithHttpInfo($create_gdpr_contact_request);
        return $response;
    }

    /**
     * Operation createGDPRContactWithHttpInfo
     *
     * Kontakt - Adressdaten anlegen
     *
     * @param  \MittwaldApi\Model\GDPRContact $create_gdpr_contact_request Die Adressdaten (required)
     *
     * @throws \MittwaldApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MittwaldApi\Model\GDPRContact, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGDPRContactWithHttpInfo($create_gdpr_contact_request)
    {
        $request = $this->createGDPRContactRequest($create_gdpr_contact_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 201:
                    if ('\MittwaldApi\Model\GDPRContact' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MittwaldApi\Model\GDPRContact', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MittwaldApi\Model\GDPRContact';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MittwaldApi\Model\GDPRContact',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createGDPRContactAsync
     *
     * Kontakt - Adressdaten anlegen
     *
     * @param  \MittwaldApi\Model\GDPRContact $create_gdpr_contact_request Die Adressdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGDPRContactAsync($create_gdpr_contact_request)
    {
        return $this->createGDPRContactAsyncWithHttpInfo($create_gdpr_contact_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createGDPRContactAsyncWithHttpInfo
     *
     * Kontakt - Adressdaten anlegen
     *
     * @param  \MittwaldApi\Model\GDPRContact $create_gdpr_contact_request Die Adressdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGDPRContactAsyncWithHttpInfo($create_gdpr_contact_request)
    {
        $returnType = '\MittwaldApi\Model\GDPRContact';
        $request = $this->createGDPRContactRequest($create_gdpr_contact_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createGDPRContact'
     *
     * @param  \MittwaldApi\Model\GDPRContact $create_gdpr_contact_request Die Adressdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createGDPRContactRequest($create_gdpr_contact_request)
    {
        // verify the required parameter 'create_gdpr_contact_request' is set
        if ($create_gdpr_contact_request === null || (is_array($create_gdpr_contact_request) && count($create_gdpr_contact_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_gdpr_contact_request when calling createGDPRContact'
            );
        }

        $resourcePath = '/gdpr/contacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($create_gdpr_contact_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_gdpr_contact_request));
            } else {
                $httpBody = $create_gdpr_contact_request;
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
     * Operation getGDPRContact
     *
     * Kontakt - Liefert einen bestimmten Adressdatensatz
     *
     * @param  string $contact_identifier Die ID des Adressdatensatzes (required)
     *
     * @throws \MittwaldApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MittwaldApi\Model\GDPRContact|\MittwaldApi\Model\Message
     */
    public function getGDPRContact($contact_identifier)
    {
        list($response) = $this->getGDPRContactWithHttpInfo($contact_identifier);
        return $response;
    }

    /**
     * Operation getGDPRContactWithHttpInfo
     *
     * Kontakt - Liefert einen bestimmten Adressdatensatz
     *
     * @param  string $contact_identifier Die ID des Adressdatensatzes (required)
     *
     * @throws \MittwaldApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MittwaldApi\Model\GDPRContact|\MittwaldApi\Model\Message, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGDPRContactWithHttpInfo($contact_identifier)
    {
        $request = $this->getGDPRContactRequest($contact_identifier);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\MittwaldApi\Model\GDPRContact' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MittwaldApi\Model\GDPRContact', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\MittwaldApi\Model\Message' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MittwaldApi\Model\Message', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MittwaldApi\Model\GDPRContact';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\MittwaldApi\Model\GDPRContact',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MittwaldApi\Model\Message',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGDPRContactAsync
     *
     * Kontakt - Liefert einen bestimmten Adressdatensatz
     *
     * @param  string $contact_identifier Die ID des Adressdatensatzes (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGDPRContactAsync($contact_identifier)
    {
        return $this->getGDPRContactAsyncWithHttpInfo($contact_identifier)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGDPRContactAsyncWithHttpInfo
     *
     * Kontakt - Liefert einen bestimmten Adressdatensatz
     *
     * @param  string $contact_identifier Die ID des Adressdatensatzes (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGDPRContactAsyncWithHttpInfo($contact_identifier)
    {
        $returnType = '\MittwaldApi\Model\GDPRContact';
        $request = $this->getGDPRContactRequest($contact_identifier);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getGDPRContact'
     *
     * @param  string $contact_identifier Die ID des Adressdatensatzes (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getGDPRContactRequest($contact_identifier)
    {
        // verify the required parameter 'contact_identifier' is set
        if ($contact_identifier === null || (is_array($contact_identifier) && count($contact_identifier) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $contact_identifier when calling getGDPRContact'
            );
        }

        $resourcePath = '/gdpr/contacts/{contactIdentifier}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($contact_identifier !== null) {
            $resourcePath = str_replace(
                '{' . 'contactIdentifier' . '}',
                ObjectSerializer::toPathValue($contact_identifier),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getGDPRContacts
     *
     * Kontakt - Liefert alle hinterlegten Adressdaten
     *
     * @param  string $type Filterung der Kontakte nach einem bestimmten Typ (optional)
     *
     * @throws \MittwaldApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MittwaldApi\Model\GDPRContact[]
     */
    public function getGDPRContacts($type = null)
    {
        list($response) = $this->getGDPRContactsWithHttpInfo($type);
        return $response;
    }

    /**
     * Operation getGDPRContactsWithHttpInfo
     *
     * Kontakt - Liefert alle hinterlegten Adressdaten
     *
     * @param  string $type Filterung der Kontakte nach einem bestimmten Typ (optional)
     *
     * @throws \MittwaldApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MittwaldApi\Model\GDPRContact[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getGDPRContactsWithHttpInfo($type = null)
    {
        $request = $this->getGDPRContactsRequest($type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\MittwaldApi\Model\GDPRContact[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MittwaldApi\Model\GDPRContact[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MittwaldApi\Model\GDPRContact[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\MittwaldApi\Model\GDPRContact[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGDPRContactsAsync
     *
     * Kontakt - Liefert alle hinterlegten Adressdaten
     *
     * @param  string $type Filterung der Kontakte nach einem bestimmten Typ (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGDPRContactsAsync($type = null)
    {
        return $this->getGDPRContactsAsyncWithHttpInfo($type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGDPRContactsAsyncWithHttpInfo
     *
     * Kontakt - Liefert alle hinterlegten Adressdaten
     *
     * @param  string $type Filterung der Kontakte nach einem bestimmten Typ (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGDPRContactsAsyncWithHttpInfo($type = null)
    {
        $returnType = '\MittwaldApi\Model\GDPRContact[]';
        $request = $this->getGDPRContactsRequest($type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getGDPRContacts'
     *
     * @param  string $type Filterung der Kontakte nach einem bestimmten Typ (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getGDPRContactsRequest($type = null)
    {

        $resourcePath = '/gdpr/contacts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($type)) {
            $type = ObjectSerializer::serializeCollection($type, '', true);
        }
        if ($type !== null) {
            $queryParams['type'] = $type;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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
            'GET',
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
