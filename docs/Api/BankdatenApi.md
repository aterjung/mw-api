# MittwaldApi\BankdatenApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertBankDataToSEPA()**](BankdatenApi.md#convertBankDataToSEPA) | **POST** /bankdata/actions/convert | Konvertiert Bankdaten in das IBAN / BIC Format


## `convertBankDataToSEPA()`

```php
convertBankDataToSEPA($bankdaten): object
```

Konvertiert Bankdaten in das IBAN / BIC Format

Liefert zu einer gegebenen Kontonummer und BLZ die entsprechende IBAN und BIC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\BankdatenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bankdaten = new \MittwaldApi\Model\BankData(); // \MittwaldApi\Model\BankData | Die zu konvertierenden Bankdaten

try {
    $result = $apiInstance->convertBankDataToSEPA($bankdaten);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankdatenApi->convertBankDataToSEPA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankdaten** | [**\MittwaldApi\Model\BankData**](../Model/BankData.md)| Die zu konvertierenden Bankdaten |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
