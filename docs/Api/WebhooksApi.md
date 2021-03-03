# MittwaldApi\WebhooksApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhook**](WebhooksApi.md#createWebhook) | **POST** /webhooks | Registriert einen neuen Webhook
[**deleteWebhook**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{webhookIdentifier} | Löscht einen Webhook
[**getWebhook**](WebhooksApi.md#getWebhook) | **GET** /webhooks/{webhookIdentifier} | Liefert einen bestimmten Webhook
[**listWebhooks**](WebhooksApi.md#listWebhooks) | **GET** /webhooks | Liefert alle hinterlegten Webhooks
[**updateWebhook**](WebhooksApi.md#updateWebhook) | **PUT** /webhooks/{webhookIdentifier} | Updated den gewünschten Webhook


# **createWebhook**
> \MittwaldApi\Model\Webhook createWebhook($webhook)

Registriert einen neuen Webhook

Registriert einen neuen Webhook für einen bestimmten Login

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook = new \MittwaldApi\Model\Webhook(); // \MittwaldApi\Model\Webhook | Die Webhook-Konfiguration

try {
    $result = $apiInstance->createWebhook($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\MittwaldApi\Model\Webhook**](../Model/Webhook.md)| Die Webhook-Konfiguration |

### Return type

[**\MittwaldApi\Model\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhook**
> deleteWebhook($webhook_identifier)

Löscht einen Webhook

Löscht den gegebenen Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_identifier = 'webhook_identifier_example'; // string | Die ID des Webhooks

try {
    $apiInstance->deleteWebhook($webhook_identifier);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_identifier** | **string**| Die ID des Webhooks |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhook**
> \MittwaldApi\Model\Webhook getWebhook($webhook_identifier)

Liefert einen bestimmten Webhook

Liefert die Daten eines bestimmten Webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_identifier = 'webhook_identifier_example'; // string | Die ID des Webhooks

try {
    $result = $apiInstance->getWebhook($webhook_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_identifier** | **string**| Die ID des Webhooks |

### Return type

[**\MittwaldApi\Model\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWebhooks**
> \MittwaldApi\Model\Webhook[] listWebhooks()

Liefert alle hinterlegten Webhooks

Liefert alle hinterlegten Webhooks eines bestimmten Logins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhook**
> \MittwaldApi\Model\Webhook updateWebhook($webhook_identifier, $webhook)

Updated den gewünschten Webhook

Updated die Daten des gewünschten Webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webhook_identifier = 'webhook_identifier_example'; // string | Die ID des Webhooks
$webhook = new \MittwaldApi\Model\Webhook(); // \MittwaldApi\Model\Webhook | Die Webhook-Konfiguration

try {
    $result = $apiInstance->updateWebhook($webhook_identifier, $webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_identifier** | **string**| Die ID des Webhooks |
 **webhook** | [**\MittwaldApi\Model\Webhook**](../Model/Webhook.md)| Die Webhook-Konfiguration |

### Return type

[**\MittwaldApi\Model\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

