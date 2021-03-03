# MittwaldApi\VirtApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listGuestOperatingSystems()**](VirtApi.md#listGuestOperatingSystems) | **GET** /virt/guestoperatingsystems | Root-Server Betriebssysteme


## `listGuestOperatingSystems()`

```php
listGuestOperatingSystems(): \MittwaldApi\Model\GuestOperatingSystem
```

Root-Server Betriebssysteme

Liefert die zur Installation vorhandenen Root-Server Betriebssysteme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\VirtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listGuestOperatingSystems();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtApi->listGuestOperatingSystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\GuestOperatingSystem**](../Model/GuestOperatingSystem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
