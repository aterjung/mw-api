# MittwaldApi\AuthentifizierungApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate()**](AuthentifizierungApi.md#authenticate) | **POST** /authenticate | Anforderung eines neuen API-Tokens
[**createApplicationToken()**](AuthentifizierungApi.md#createApplicationToken) | **POST** /authentication/tokens | Hinterlegen von neuen Application-Tokens
[**deleteApplicationToken()**](AuthentifizierungApi.md#deleteApplicationToken) | **DELETE** /authentication/tokens/{uuid} | Löschen von Application-Tokens
[**listApplicationTokens()**](AuthentifizierungApi.md#listApplicationTokens) | **GET** /authentication/tokens | Auslesen von erstellten Application-Tokens


## `authenticate()`

```php
authenticate($authentication_request): \MittwaldApi\Model\AuthenticationResponse
```

Anforderung eines neuen API-Tokens

Diese Operation erlaubt die Ausstellung eines neuen API-Tokens. Für die Ausstellung des Tokens müssen die Zugangsdaten des Mittwald-Kundencenters im Body des Requests übermittelt werden.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AuthentifizierungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authentication_request = new \MittwaldApi\Model\AuthenticationRequest(); // \MittwaldApi\Model\AuthenticationRequest | Die Zugangsdaten, mit denen die Authentifizierung erfolgen soll.

try {
    $result = $apiInstance->authenticate($authentication_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthentifizierungApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_request** | [**\MittwaldApi\Model\AuthenticationRequest**](../Model/AuthenticationRequest.md)| Die Zugangsdaten, mit denen die Authentifizierung erfolgen soll. |

### Return type

[**\MittwaldApi\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApplicationToken()`

```php
createApplicationToken($token): \MittwaldApi\Model\ApplicationTokenResponse
```

Hinterlegen von neuen Application-Tokens

Diese Operation ermöglicht es neue Application-Tokens zu hinterlegen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AuthentifizierungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = new \MittwaldApi\Model\ApplicationTokenInput(); // \MittwaldApi\Model\ApplicationTokenInput | Das Token sowie eine optionale Beschreibung

try {
    $result = $apiInstance->createApplicationToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthentifizierungApi->createApplicationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | [**\MittwaldApi\Model\ApplicationTokenInput**](../Model/ApplicationTokenInput.md)| Das Token sowie eine optionale Beschreibung |

### Return type

[**\MittwaldApi\Model\ApplicationTokenResponse**](../Model/ApplicationTokenResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicationToken()`

```php
deleteApplicationToken($uuid)
```

Löschen von Application-Tokens

Diese Operation ermöglicht es Application-Tokens zu löschen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AuthentifizierungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Die UUID des Tokens

try {
    $apiInstance->deleteApplicationToken($uuid);
} catch (Exception $e) {
    echo 'Exception when calling AuthentifizierungApi->deleteApplicationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Die UUID des Tokens |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApplicationTokens()`

```php
listApplicationTokens(): \MittwaldApi\Model\ApplicationToken[]
```

Auslesen von erstellten Application-Tokens

Diese Operation liefert alle bisher erstellten Application-Tokens aus.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AuthentifizierungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listApplicationTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthentifizierungApi->listApplicationTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\ApplicationToken[]**](../Model/ApplicationToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
