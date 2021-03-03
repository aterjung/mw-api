# MittwaldApi\BestellungenApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderPartnerBox()**](BestellungenApi.md#orderPartnerBox) | **POST** /orders/partnerbox | Bestellung eines Partnerbox
[**orderPartnerProgram()**](BestellungenApi.md#orderPartnerProgram) | **POST** /orders/partnerprogram | Anmeldung am Partnerprogramm
[**orderPreUpgradeCheck()**](BestellungenApi.md#orderPreUpgradeCheck) | **GET** /orders/preUpgradeCheck/{accountIdentifier}/{articleNumber} | Pre-Upgrade Check


## `orderPartnerBox()`

```php
orderPartnerBox($partner_hosting_order_request)
```

Bestellung eines Partnerbox

Über diese Operation kann ein neues Partnerbox bestellt werden.  **Achtung**: Ist der Nutzer der API als Kunde authentifiziert (d.h. ein API-Token über den `/authenticate`-Endpunkt bezogen hat), ist die erneute Angabe von Kundenstammdaten im Request (hier über das `customer`-Attribut) nicht notwendig. Dennoch übergebene Kundenstammdaten werden zugunsten der bereits im System hinterlegten ignoriert.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\BestellungenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_hosting_order_request = new \MittwaldApi\Model\PartnerHostingOrderRequest(); // \MittwaldApi\Model\PartnerHostingOrderRequest | Die Bestellanfrage; diese enthält notwendige Kundenstammdaten

try {
    $apiInstance->orderPartnerBox($partner_hosting_order_request);
} catch (Exception $e) {
    echo 'Exception when calling BestellungenApi->orderPartnerBox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_hosting_order_request** | [**\MittwaldApi\Model\PartnerHostingOrderRequest**](../Model/PartnerHostingOrderRequest.md)| Die Bestellanfrage; diese enthält notwendige Kundenstammdaten |

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

## `orderPartnerProgram()`

```php
orderPartnerProgram($partner_hosting_order_request)
```

Anmeldung am Partnerprogramm

Über diese Operation kann ein Kunde am Partnerprogramm angemeldet werden.  **Achtung**: Ist der Nutzer der API als Kunde authentifiziert (d.h. ein API-Token über den `/authenticate`-Endpunkt bezogen hat), ist die erneute Angabe von Kundenstammdaten im Request (hier über das `customer`-Attribut) nicht notwendig. Dennoch übergebene Kundenstammdaten werden zugunsten der bereits im System hinterlegten ignoriert.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\BestellungenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_hosting_order_request = new \MittwaldApi\Model\PartnerHostingOrderRequest(); // \MittwaldApi\Model\PartnerHostingOrderRequest | Die Bestellanfrage; diese enthält notwendige Kundenstammdaten

try {
    $apiInstance->orderPartnerProgram($partner_hosting_order_request);
} catch (Exception $e) {
    echo 'Exception when calling BestellungenApi->orderPartnerProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_hosting_order_request** | [**\MittwaldApi\Model\PartnerHostingOrderRequest**](../Model/PartnerHostingOrderRequest.md)| Die Bestellanfrage; diese enthält notwendige Kundenstammdaten |

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

## `orderPreUpgradeCheck()`

```php
orderPreUpgradeCheck($account_identifier, $article_number): \MittwaldApi\Model\OrderPreUpgradeCheck
```

Pre-Upgrade Check

Führt ein Check im Vorfeld aus, was sich bei einem Upgrade zu Artikel X ändern würde.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\BestellungenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$article_number = 'article_number_example'; // string | Artikelnummer

try {
    $result = $apiInstance->orderPreUpgradeCheck($account_identifier, $article_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BestellungenApi->orderPreUpgradeCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **article_number** | **string**| Artikelnummer |

### Return type

[**\MittwaldApi\Model\OrderPreUpgradeCheck**](../Model/OrderPreUpgradeCheck.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
