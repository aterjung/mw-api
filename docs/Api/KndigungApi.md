# MittwaldApi\KndigungApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelContract()**](KndigungApi.md#cancelContract) | **POST** /cancellations | Kündigung einleiten
[**resendCancellationConfirmation()**](KndigungApi.md#resendCancellationConfirmation) | **POST** /cancellations/{cancellationIdentifier}/actions/confirmationmail | Kündigungsbestätigung erneut senden


## `cancelContract()`

```php
cancelContract($cancellation_request)
```

Kündigung einleiten

Leitet die Kündigung für einen bestimmten Tarif ein

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\KndigungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancellation_request = new \MittwaldApi\Model\CancellationRequest(); // \MittwaldApi\Model\CancellationRequest | Die Kündigungsdaten

try {
    $apiInstance->cancelContract($cancellation_request);
} catch (Exception $e) {
    echo 'Exception when calling KndigungApi->cancelContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancellation_request** | [**\MittwaldApi\Model\CancellationRequest**](../Model/CancellationRequest.md)| Die Kündigungsdaten |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendCancellationConfirmation()`

```php
resendCancellationConfirmation($cancellation_identifier)
```

Kündigungsbestätigung erneut senden

Löst eine erneute Versendung der Kündigungsbestätigung per E-Mail aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\KndigungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancellation_identifier = 56; // int | Die ID der bereits eingeleiteten Kündigung

try {
    $apiInstance->resendCancellationConfirmation($cancellation_identifier);
} catch (Exception $e) {
    echo 'Exception when calling KndigungApi->resendCancellationConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancellation_identifier** | **int**| Die ID der bereits eingeleiteten Kündigung |

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
