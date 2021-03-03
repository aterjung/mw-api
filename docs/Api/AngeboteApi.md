# MittwaldApi\AngeboteApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuoteFromCart()**](AngeboteApi.md#createQuoteFromCart) | **POST** /carts/{cartIdentifier}/actions/offer | Angebot versenden
[**recommendCart()**](AngeboteApi.md#recommendCart) | **POST** /carts/{cartIdentifier}/actions/recommend | Warenkorbvorlage für Account-Ausgliederung erstellen
[**requestQuote()**](AngeboteApi.md#requestQuote) | **POST** /offers | Neues Angebot anfordern
[**shareCart()**](AngeboteApi.md#shareCart) | **POST** /carts/{cartIdentifier}/actions/share | Warenkorbvorlage erstellen
[**verifyRecommendCart()**](AngeboteApi.md#verifyRecommendCart) | **POST** /carts/{cartIdentifier}/actions/recommendation/verify | Überprüfe PIN-Code von Empfehlung


## `createQuoteFromCart()`

```php
createQuoteFromCart($cart_identifier, $recipient)
```

Angebot versenden

Erzeugt ein Angebot aus einem Warenkorb und verschickt dieses als PDF per Mail an den angegebenen Empfänger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$recipient = new \MittwaldApi\Model\Contact(); // \MittwaldApi\Model\Contact | Empfänger

try {
    $apiInstance->createQuoteFromCart($cart_identifier, $recipient);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->createQuoteFromCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **recipient** | [**\MittwaldApi\Model\Contact**](../Model/Contact.md)| Empfänger |

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

## `recommendCart()`

```php
recommendCart($cart_identifier): \MittwaldApi\Model\Recommendation
```

Warenkorbvorlage für Account-Ausgliederung erstellen

Erstellt eine Vorlage aus einem Warenkorb mit Account-Ausgliederung. Vorlagen können nicht bearbeitet werden. Die Vorlage enthält keine Personenbezogenendaten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID

try {
    $result = $apiInstance->recommendCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->recommendCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\MittwaldApi\Model\Recommendation**](../Model/Recommendation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestQuote()`

```php
requestQuote($offer_request)
```

Neues Angebot anfordern

Über diese Operation kann ein neues Angebot angefordert werden

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_request = new \MittwaldApi\Model\OfferRequest(); // \MittwaldApi\Model\OfferRequest | Die Angebotsanfrage; diese enthält Daten zu den angefragten Artikeln sowie notwendige Kundenstammdaten

try {
    $apiInstance->requestQuote($offer_request);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->requestQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_request** | [**\MittwaldApi\Model\OfferRequest**](../Model/OfferRequest.md)| Die Angebotsanfrage; diese enthält Daten zu den angefragten Artikeln sowie notwendige Kundenstammdaten |

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

## `shareCart()`

```php
shareCart($cart_identifier): \MittwaldApi\Model\Cart
```

Warenkorbvorlage erstellen

Erstellt eine Vorlage aus einem Warenkorb. Vorlagen können nicht bearbeitet werden. Die Vorlage enthält keine Personenbezogenendaten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID

try {
    $result = $apiInstance->shareCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->shareCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyRecommendCart()`

```php
verifyRecommendCart($cart_identifier, $payload): \MittwaldApi\Model\Message
```

Überprüfe PIN-Code von Empfehlung

Überprüft den Pin-Code bei einer Empfehlung.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$payload = new \MittwaldApi\Model\FormularBody2(); // \MittwaldApi\Model\FormularBody2

try {
    $result = $apiInstance->verifyRecommendCart($cart_identifier, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->verifyRecommendCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **payload** | [**\MittwaldApi\Model\FormularBody2**](../Model/FormularBody2.md)|  |

### Return type

[**\MittwaldApi\Model\Message**](../Model/Message.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
