# MittwaldApi\PromotionCodeApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPromotionCode()**](PromotionCodeApi.md#getPromotionCode) | **GET** /promotioncodes/{promotionCode} | Promotioncode auslesen
[**verifyPromotionCode()**](PromotionCodeApi.md#verifyPromotionCode) | **POST** /promotioncodes/{promotionCode}/actions/validate | Promotioncode validieren


## `getPromotionCode()`

```php
getPromotionCode($promotion_code)
```

Promotioncode auslesen

Liefert PromotionCode-Details aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\PromotionCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_code = 'promotion_code_example'; // string | PromotionCode

try {
    $apiInstance->getPromotionCode($promotion_code);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodeApi->getPromotionCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| PromotionCode |

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

## `verifyPromotionCode()`

```php
verifyPromotionCode($promotion_code, $data)
```

Promotioncode validieren

Validiert einen Promotion-Code für eine Bestellung

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\PromotionCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_code = 'promotion_code_example'; // string | PromotionCode
$data = new \MittwaldApi\Model\PromotioncodeValidierungsanfrage(); // \MittwaldApi\Model\PromotioncodeValidierungsanfrage

try {
    $apiInstance->verifyPromotionCode($promotion_code, $data);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodeApi->verifyPromotionCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| PromotionCode |
 **data** | [**\MittwaldApi\Model\PromotioncodeValidierungsanfrage**](../Model/PromotioncodeValidierungsanfrage.md)|  |

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
