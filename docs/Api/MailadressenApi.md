# MittwaldApi\MailadressenApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listEmailAddressesByAccount()**](MailadressenApi.md#listEmailAddressesByAccount) | **GET** /accounts/{accountIdentifier}/mailaddresses | Mailadressen eines Accounts auslesen


## `listEmailAddressesByAccount()`

```php
listEmailAddressesByAccount($account_identifier, $limit, $offset): \MittwaldApi\Model\MailAddress[]
```

Mailadressen eines Accounts auslesen

Diese Operation liest die Mailadressen eines einzelnen Accounts aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\MailadressenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$limit = 20; // int | Anzahl der zurückzuliefernden Domains.
$offset = 0; // int | Offset für die Limitierung der Suchergebnisse

try {
    $result = $apiInstance->listEmailAddressesByAccount($account_identifier, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailadressenApi->listEmailAddressesByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **limit** | **int**| Anzahl der zurückzuliefernden Domains. | [optional] [default to 20]
 **offset** | **int**| Offset für die Limitierung der Suchergebnisse | [optional] [default to 0]

### Return type

[**\MittwaldApi\Model\MailAddress[]**](../Model/MailAddress.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
