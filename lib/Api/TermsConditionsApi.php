<?php
/**
 * TermsConditionsApi
 * PHP version 5
 *
 * @category Class
 * @package  DCG\Cinema
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Cinema API
 *
 * Dining club API for Cinema platform
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DCG\Cinema\Api;

use \DCG\Cinema\ApiClient;
use \DCG\Cinema\ApiException;
use \DCG\Cinema\Configuration;
use \DCG\Cinema\ObjectSerializer;

/**
 * TermsConditionsApi Class Doc Comment
 *
 * @category Class
 * @package  DCG\Cinema
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TermsConditionsApi
{
    /**
     * API Client
     *
     * @var \DCG\Cinema\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \DCG\Cinema\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\DCG\Cinema\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \DCG\Cinema\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \DCG\Cinema\ApiClient $apiClient set the API client
     *
     * @return TermsConditionsApi
     */
    public function setApiClient(\DCG\Cinema\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation termsAndConditionsGet
     *
     * Get the Terms & Conditions
     *
     * @throws \DCG\Cinema\ApiException on non-2xx response
     * @return void
     */
    public function termsAndConditionsGet()
    {
        list($response) = $this->termsAndConditionsGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation termsAndConditionsGetWithHttpInfo
     *
     * Get the Terms & Conditions
     *
     * @throws \DCG\Cinema\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function termsAndConditionsGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/terms-and-conditions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Client-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['Client-Token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('User-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['User-Token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/terms-and-conditions'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
