# MittwaldApi\ResellerApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReseller()**](ResellerApi.md#getReseller) | **GET** /resellers/{resellerIdentifier} | Reseller auslesen


## `getReseller()`

```php
getReseller($reseller_identifier): \MittwaldApi\Model\Reseller
```

Reseller auslesen

Diese Operation liest genaue Daten eines einzelnen Resellers aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reseller_identifier = 'reseller_identifier_example'; // string | Name oder ID eines Resellers

try {
    $result = $apiInstance->getReseller($reseller_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getReseller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reseller_identifier** | **string**| Name oder ID eines Resellers |

### Return type

[**\MittwaldApi\Model\Reseller**](../Model/Reseller.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
