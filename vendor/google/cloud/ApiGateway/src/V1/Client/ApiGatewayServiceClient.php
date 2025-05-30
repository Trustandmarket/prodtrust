<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/apigateway/v1/apigateway_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ApiGateway\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ApiGateway\V1\Api;
use Google\Cloud\ApiGateway\V1\ApiConfig;
use Google\Cloud\ApiGateway\V1\CreateApiConfigRequest;
use Google\Cloud\ApiGateway\V1\CreateApiRequest;
use Google\Cloud\ApiGateway\V1\CreateGatewayRequest;
use Google\Cloud\ApiGateway\V1\DeleteApiConfigRequest;
use Google\Cloud\ApiGateway\V1\DeleteApiRequest;
use Google\Cloud\ApiGateway\V1\DeleteGatewayRequest;
use Google\Cloud\ApiGateway\V1\Gateway;
use Google\Cloud\ApiGateway\V1\GetApiConfigRequest;
use Google\Cloud\ApiGateway\V1\GetApiRequest;
use Google\Cloud\ApiGateway\V1\GetGatewayRequest;
use Google\Cloud\ApiGateway\V1\ListApiConfigsRequest;
use Google\Cloud\ApiGateway\V1\ListApisRequest;
use Google\Cloud\ApiGateway\V1\ListGatewaysRequest;
use Google\Cloud\ApiGateway\V1\UpdateApiConfigRequest;
use Google\Cloud\ApiGateway\V1\UpdateApiRequest;
use Google\Cloud\ApiGateway\V1\UpdateGatewayRequest;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The API Gateway Service is the interface for managing API Gateways.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> createApiAsync(CreateApiRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> createApiConfigAsync(CreateApiConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> createGatewayAsync(CreateGatewayRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteApiAsync(DeleteApiRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteApiConfigAsync(DeleteApiConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteGatewayAsync(DeleteGatewayRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Api> getApiAsync(GetApiRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ApiConfig> getApiConfigAsync(GetApiConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Gateway> getGatewayAsync(GetGatewayRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listApiConfigsAsync(ListApiConfigsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listApisAsync(ListApisRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listGatewaysAsync(ListGatewaysRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateApiAsync(UpdateApiRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateApiConfigAsync(UpdateApiConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateGatewayAsync(UpdateGatewayRequest $request, array $optionalArgs = [])
 */
final class ApiGatewayServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.apigateway.v1.ApiGatewayService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'apigateway.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'apigateway.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/api_gateway_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/api_gateway_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/api_gateway_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/api_gateway_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a api
     * resource.
     *
     * @param string $project
     * @param string $api
     *
     * @return string The formatted api resource.
     */
    public static function apiName(string $project, string $api): string
    {
        return self::getPathTemplate('api')->render([
            'project' => $project,
            'api' => $api,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a api_config
     * resource.
     *
     * @param string $project
     * @param string $api
     * @param string $apiConfig
     *
     * @return string The formatted api_config resource.
     */
    public static function apiConfigName(string $project, string $api, string $apiConfig): string
    {
        return self::getPathTemplate('apiConfig')->render([
            'project' => $project,
            'api' => $api,
            'api_config' => $apiConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a gateway
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $gateway
     *
     * @return string The formatted gateway resource.
     */
    public static function gatewayName(string $project, string $location, string $gateway): string
    {
        return self::getPathTemplate('gateway')->render([
            'project' => $project,
            'location' => $location,
            'gateway' => $gateway,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * managed_service resource.
     *
     * @param string $service
     *
     * @return string The formatted managed_service resource.
     */
    public static function managedServiceName(string $service): string
    {
        return self::getPathTemplate('managedService')->render([
            'service' => $service,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a service
     * resource.
     *
     * @param string $service
     * @param string $config
     *
     * @return string The formatted service resource.
     */
    public static function serviceName(string $service, string $config): string
    {
        return self::getPathTemplate('service')->render([
            'service' => $service,
            'config' => $config,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * service_account resource.
     *
     * @param string $project
     * @param string $serviceAccount
     *
     * @return string The formatted service_account resource.
     */
    public static function serviceAccountName(string $project, string $serviceAccount): string
    {
        return self::getPathTemplate('serviceAccount')->render([
            'project' => $project,
            'service_account' => $serviceAccount,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - api: projects/{project}/locations/global/apis/{api}
     * - apiConfig: projects/{project}/locations/global/apis/{api}/configs/{api_config}
     * - gateway: projects/{project}/locations/{location}/gateways/{gateway}
     * - location: projects/{project}/locations/{location}
     * - managedService: services/{service}
     * - service: services/{service}/configs/{config}
     * - serviceAccount: projects/{project}/serviceAccounts/{service_account}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'apigateway.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a new Api in a given project and location.
     *
     * The async variant is {@see ApiGatewayServiceClient::createApiAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/create_api.php
     *
     * @param CreateApiRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createApi(CreateApiRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateApi', $request, $callOptions)->wait();
    }

    /**
     * Creates a new ApiConfig in a given project and location.
     *
     * The async variant is {@see ApiGatewayServiceClient::createApiConfigAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/create_api_config.php
     *
     * @param CreateApiConfigRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createApiConfig(CreateApiConfigRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateApiConfig', $request, $callOptions)->wait();
    }

    /**
     * Creates a new Gateway in a given project and location.
     *
     * The async variant is {@see ApiGatewayServiceClient::createGatewayAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/create_gateway.php
     *
     * @param CreateGatewayRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createGateway(CreateGatewayRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateGateway', $request, $callOptions)->wait();
    }

    /**
     * Deletes a single Api.
     *
     * The async variant is {@see ApiGatewayServiceClient::deleteApiAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/delete_api.php
     *
     * @param DeleteApiRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteApi(DeleteApiRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteApi', $request, $callOptions)->wait();
    }

    /**
     * Deletes a single ApiConfig.
     *
     * The async variant is {@see ApiGatewayServiceClient::deleteApiConfigAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/delete_api_config.php
     *
     * @param DeleteApiConfigRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteApiConfig(DeleteApiConfigRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteApiConfig', $request, $callOptions)->wait();
    }

    /**
     * Deletes a single Gateway.
     *
     * The async variant is {@see ApiGatewayServiceClient::deleteGatewayAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/delete_gateway.php
     *
     * @param DeleteGatewayRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteGateway(DeleteGatewayRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteGateway', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single Api.
     *
     * The async variant is {@see ApiGatewayServiceClient::getApiAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/get_api.php
     *
     * @param GetApiRequest $request     A request to house fields associated with the call.
     * @param array         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Api
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getApi(GetApiRequest $request, array $callOptions = []): Api
    {
        return $this->startApiCall('GetApi', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single ApiConfig.
     *
     * The async variant is {@see ApiGatewayServiceClient::getApiConfigAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/get_api_config.php
     *
     * @param GetApiConfigRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ApiConfig
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getApiConfig(GetApiConfigRequest $request, array $callOptions = []): ApiConfig
    {
        return $this->startApiCall('GetApiConfig', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single Gateway.
     *
     * The async variant is {@see ApiGatewayServiceClient::getGatewayAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/get_gateway.php
     *
     * @param GetGatewayRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Gateway
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getGateway(GetGatewayRequest $request, array $callOptions = []): Gateway
    {
        return $this->startApiCall('GetGateway', $request, $callOptions)->wait();
    }

    /**
     * Lists ApiConfigs in a given project and location.
     *
     * The async variant is {@see ApiGatewayServiceClient::listApiConfigsAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/list_api_configs.php
     *
     * @param ListApiConfigsRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listApiConfigs(ListApiConfigsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListApiConfigs', $request, $callOptions);
    }

    /**
     * Lists Apis in a given project and location.
     *
     * The async variant is {@see ApiGatewayServiceClient::listApisAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/list_apis.php
     *
     * @param ListApisRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listApis(ListApisRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListApis', $request, $callOptions);
    }

    /**
     * Lists Gateways in a given project and location.
     *
     * The async variant is {@see ApiGatewayServiceClient::listGatewaysAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/list_gateways.php
     *
     * @param ListGatewaysRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listGateways(ListGatewaysRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListGateways', $request, $callOptions);
    }

    /**
     * Updates the parameters of a single Api.
     *
     * The async variant is {@see ApiGatewayServiceClient::updateApiAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/update_api.php
     *
     * @param UpdateApiRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateApi(UpdateApiRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateApi', $request, $callOptions)->wait();
    }

    /**
     * Updates the parameters of a single ApiConfig.
     *
     * The async variant is {@see ApiGatewayServiceClient::updateApiConfigAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/update_api_config.php
     *
     * @param UpdateApiConfigRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateApiConfig(UpdateApiConfigRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateApiConfig', $request, $callOptions)->wait();
    }

    /**
     * Updates the parameters of a single Gateway.
     *
     * The async variant is {@see ApiGatewayServiceClient::updateGatewayAsync()} .
     *
     * @example samples/V1/ApiGatewayServiceClient/update_gateway.php
     *
     * @param UpdateGatewayRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateGateway(UpdateGatewayRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateGateway', $request, $callOptions)->wait();
    }
}
