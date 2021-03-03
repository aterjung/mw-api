# MittwaldApi\VertrgeApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelContract()**](VertrgeApi.md#cancelContract) | **POST** /cancellations | Kündigung einleiten
[**listCancelledContractsByCustomer()**](VertrgeApi.md#listCancelledContractsByCustomer) | **GET** /customers/{customerNumber}/cancelledcontracts | Verträge eines Kunden, die sich aktuell im Kündigungsprozess befinden
[**listContractsByCustomer()**](VertrgeApi.md#listContractsByCustomer) | **GET** /customers/{customerNumber}/contracts | Verträge auslesen
[**resendCancellationConfirmation()**](VertrgeApi.md#resendCancellationConfirmation) | **POST** /cancellations/{cancellationIdentifier}/actions/confirmationmail | Kündigungsbestätigung erneut senden


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



$apiInstance = new MittwaldApi\Api\VertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancellation_request = new \MittwaldApi\Model\CancellationRequest(); // \MittwaldApi\Model\CancellationRequest | Die Kündigungsdaten

try {
    $apiInstance->cancelContract($cancellation_request);
} catch (Exception $e) {
    echo 'Exception when calling VertrgeApi->cancelContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancellation_request** | [**\MittwaldApi\Model\CancellationRequest**](../Model/CancellationRequest.md)| Die Kündigungsdaten |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCancelledContractsByCustomer()`

```php
listCancelledContractsByCustomer($customer_number): \MittwaldApi\Model\Contract[]
```

Verträge eines Kunden, die sich aktuell im Kündigungsprozess befinden

Liefert alle Verträge eines Kunden, die aktuell gekündigt werden und sich noch nicht länger als 5 Tage in diesem Prozess befinden

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\VertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Die Kundennummer

try {
    $result = $apiInstance->listCancelledContractsByCustomer($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VertrgeApi->listCancelledContractsByCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Die Kundennummer |

### Return type

[**\MittwaldApi\Model\Contract[]**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContractsByCustomer()`

```php
listContractsByCustomer($customer_number): \MittwaldApi\Model\Contract[]
```

Verträge auslesen

Liefert alle Verträge eines Kunden

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\VertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Die Kundennummer

try {
    $result = $apiInstance->listContractsByCustomer($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VertrgeApi->listContractsByCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Die Kundennummer |

### Return type

[**\MittwaldApi\Model\Contract[]**](../Model/Contract.md)

### Authorization

No authorization required

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



$apiInstance = new MittwaldApi\Api\VertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancellation_identifier = 56; // int | Die ID der bereits eingeleiteten Kündigung

try {
    $apiInstance->resendCancellationConfirmation($cancellation_identifier);
} catch (Exception $e) {
    echo 'Exception when calling VertrgeApi->resendCancellationConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancellation_identifier** | **int**| Die ID der bereits eingeleiteten Kündigung |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
