# MittwaldApi\DSGVOTOMsApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGDPRTom()**](DSGVOTOMsApi.md#createGDPRTom) | **POST** /gdpr/toms | TOM - TOM anlegen
[**getGDPRTom()**](DSGVOTOMsApi.md#getGDPRTom) | **GET** /gdpr/toms/{tomIdentifier} | TOM - Liefert einen bestimmten TOM
[**getGDPRToms()**](DSGVOTOMsApi.md#getGDPRToms) | **GET** /gdpr/toms | TOM - Liefert alle hinterlegten TOMs


## `createGDPRTom()`

```php
createGDPRTom($create_gdpr_tom_request): \MittwaldApi\Model\GDPRTom
```

TOM - TOM anlegen

Legt einen TOM mit den angegebenen Daten an

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOTOMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_gdpr_tom_request = new \MittwaldApi\Model\GDPRTom(); // \MittwaldApi\Model\GDPRTom | Die Daten des Toms

try {
    $result = $apiInstance->createGDPRTom($create_gdpr_tom_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOTOMsApi->createGDPRTom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_gdpr_tom_request** | [**\MittwaldApi\Model\GDPRTom**](../Model/GDPRTom.md)| Die Daten des Toms |

### Return type

[**\MittwaldApi\Model\GDPRTom**](../Model/GDPRTom.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGDPRTom()`

```php
getGDPRTom($tom_identifier): \MittwaldApi\Model\GDPRTom
```

TOM - Liefert einen bestimmten TOM

Liefert die Daten eines bestimmten TOMs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOTOMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tom_identifier = 'tom_identifier_example'; // string | Die ID des TOMs

try {
    $result = $apiInstance->getGDPRTom($tom_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOTOMsApi->getGDPRTom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tom_identifier** | **string**| Die ID des TOMs |

### Return type

[**\MittwaldApi\Model\GDPRTom**](../Model/GDPRTom.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGDPRToms()`

```php
getGDPRToms(): \MittwaldApi\Model\GDPRTom[]
```

TOM - Liefert alle hinterlegten TOMs

Liefert die Daten aller hinterlegten TOMs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOTOMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGDPRToms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOTOMsApi->getGDPRToms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\GDPRTom[]**](../Model/GDPRTom.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
