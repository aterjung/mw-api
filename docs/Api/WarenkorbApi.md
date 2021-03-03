# MittwaldApi\WarenkorbApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDomainToCart()**](WarenkorbApi.md#addDomainToCart) | **POST** /carts/{cartIdentifier}/domains | Warenkorb-Domainposition hinzufügen
[**addItemToCart()**](WarenkorbApi.md#addItemToCart) | **POST** /carts/{cartIdentifier}/items | Warenkorb-Position hinzufügen
[**checkoutOrder()**](WarenkorbApi.md#checkoutOrder) | **POST** /carts/{cartIdentifier}/actions/checkout | Bestellung abschließen
[**confirmSMSVerification()**](WarenkorbApi.md#confirmSMSVerification) | **POST** /carts/{cartIdentifier}/actions/verify | SMS-Verifizierung bestätigen
[**createCart()**](WarenkorbApi.md#createCart) | **POST** /carts | Warenkorb erstellen
[**createCartFromTemplate()**](WarenkorbApi.md#createCartFromTemplate) | **POST** /carts/{cartIdentifier} | Warenkorb aus Vorlage erstellen
[**createQuoteFromCart()**](WarenkorbApi.md#createQuoteFromCart) | **POST** /carts/{cartIdentifier}/actions/offer | Angebot versenden
[**deleteCart()**](WarenkorbApi.md#deleteCart) | **DELETE** /carts/{cartIdentifier} | Warenkorb löschen
[**deleteItemFromCart()**](WarenkorbApi.md#deleteItemFromCart) | **DELETE** /carts/{cartIdentifier}/items/{itemIdentifier} | Warenkorb-Position löschen
[**getCart()**](WarenkorbApi.md#getCart) | **GET** /carts/{cartIdentifier} | Warenkorb auslesen
[**recommendCart()**](WarenkorbApi.md#recommendCart) | **POST** /carts/{cartIdentifier}/actions/recommend | Warenkorbvorlage für Account-Ausgliederung erstellen
[**requestSMSVerification()**](WarenkorbApi.md#requestSMSVerification) | **POST** /carts/{cartIdentifier}/actions/requestverification | SMS-Verifizierung starten
[**shareCart()**](WarenkorbApi.md#shareCart) | **POST** /carts/{cartIdentifier}/actions/share | Warenkorbvorlage erstellen
[**updateCart()**](WarenkorbApi.md#updateCart) | **PUT** /carts/{cartIdentifier} | Warenkorb bearbeiten
[**verifyRecommendCart()**](WarenkorbApi.md#verifyRecommendCart) | **POST** /carts/{cartIdentifier}/actions/recommendation/verify | Überprüfe PIN-Code von Empfehlung


## `addDomainToCart()`

```php
addDomainToCart($cart_identifier, $item): \MittwaldApi\Model\Cart
```

Warenkorb-Domainposition hinzufügen

Fügt eine Domain dem Warenkorb hinzu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$item = new \MittwaldApi\Model\DomainItemInput(); // \MittwaldApi\Model\DomainItemInput | Die hinzuzufügende Domain

try {
    $result = $apiInstance->addDomainToCart($cart_identifier, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->addDomainToCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **item** | [**\MittwaldApi\Model\DomainItemInput**](../Model/DomainItemInput.md)| Die hinzuzufügende Domain |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addItemToCart()`

```php
addItemToCart($cart_identifier, $item): \MittwaldApi\Model\Cart
```

Warenkorb-Position hinzufügen

Fügt ein neues Item in den Warenkorb

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$item = new \MittwaldApi\Model\CartItemInput(); // \MittwaldApi\Model\CartItemInput | Das hinzuzufügende Item

try {
    $result = $apiInstance->addItemToCart($cart_identifier, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->addItemToCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **item** | [**\MittwaldApi\Model\CartItemInput**](../Model/CartItemInput.md)| Das hinzuzufügende Item |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkoutOrder()`

```php
checkoutOrder($cart_identifier, $pin_code)
```

Bestellung abschließen

Erzeugt eine Bestellung aus einem Warenkorb

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$pin_code = new \MittwaldApi\Model\FormularBody1(); // \MittwaldApi\Model\FormularBody1

try {
    $apiInstance->checkoutOrder($cart_identifier, $pin_code);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->checkoutOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **pin_code** | [**\MittwaldApi\Model\FormularBody1**](../Model/FormularBody1.md)|  | [optional]

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

## `confirmSMSVerification()`

```php
confirmSMSVerification($cart_identifier, $code)
```

SMS-Verifizierung bestätigen

Bestätigt die SMS-Verifizierung.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$code = new \MittwaldApi\Model\Verifizierungscode(); // \MittwaldApi\Model\Verifizierungscode

try {
    $apiInstance->confirmSMSVerification($cart_identifier, $code);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->confirmSMSVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **code** | [**\MittwaldApi\Model\Verifizierungscode**](../Model/Verifizierungscode.md)|  |

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

## `createCart()`

```php
createCart($payload): \MittwaldApi\Model\Cart
```

Warenkorb erstellen

Erstellt einen neuen Warenkorb

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \MittwaldApi\Model\FormularBody(); // \MittwaldApi\Model\FormularBody

try {
    $result = $apiInstance->createCart($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->createCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\MittwaldApi\Model\FormularBody**](../Model/FormularBody.md)|  | [optional]

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCartFromTemplate()`

```php
createCartFromTemplate($cart_identifier): \MittwaldApi\Model\Cart
```

Warenkorb aus Vorlage erstellen

Erstellt einen neuen Warenkorb aus einer Vorlage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID

try {
    $result = $apiInstance->createCartFromTemplate($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->createCartFromTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$recipient = new \MittwaldApi\Model\Contact(); // \MittwaldApi\Model\Contact | Empfänger

try {
    $apiInstance->createQuoteFromCart($cart_identifier, $recipient);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->createQuoteFromCart: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCart()`

```php
deleteCart($cart_identifier)
```

Warenkorb löschen

Löscht einen bestehenden Warenkorb

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID

try {
    $apiInstance->deleteCart($cart_identifier);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->deleteCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

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

## `deleteItemFromCart()`

```php
deleteItemFromCart($cart_identifier, $item_identifier): \MittwaldApi\Model\Cart
```

Warenkorb-Position löschen

Löscht ein Item aus dem Warenkorb

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$item_identifier = 'item_identifier_example'; // string | Item ID

try {
    $result = $apiInstance->deleteItemFromCart($cart_identifier, $item_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->deleteItemFromCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **item_identifier** | **string**| Item ID |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCart()`

```php
getCart($cart_identifier): \MittwaldApi\Model\Cart
```

Warenkorb auslesen

Liefert einen bestehenden Warenkorb aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID

try {
    $result = $apiInstance->getCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->getCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID

try {
    $result = $apiInstance->recommendCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->recommendCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\MittwaldApi\Model\Recommendation**](../Model/Recommendation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestSMSVerification()`

```php
requestSMSVerification($cart_identifier, $recipient)
```

SMS-Verifizierung starten

Fragt eine SMS-Verifizierung an. Der Empfänger erhält eine SMS mit einem Code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$recipient = new \MittwaldApi\Model\Verifizierungsanfrage(); // \MittwaldApi\Model\Verifizierungsanfrage

try {
    $apiInstance->requestSMSVerification($cart_identifier, $recipient);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->requestSMSVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **recipient** | [**\MittwaldApi\Model\Verifizierungsanfrage**](../Model/Verifizierungsanfrage.md)|  |

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



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID

try {
    $result = $apiInstance->shareCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->shareCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCart()`

```php
updateCart($cart_identifier, $cart): \MittwaldApi\Model\Cart
```

Warenkorb bearbeiten

Aktualisiert einen bestehenden Warenkorb

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$cart = new \MittwaldApi\Model\Cart(); // \MittwaldApi\Model\Cart | Der neue Warenkorb

try {
    $result = $apiInstance->updateCart($cart_identifier, $cart);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->updateCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **cart** | [**\MittwaldApi\Model\Cart**](../Model/Cart.md)| Der neue Warenkorb |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

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



$apiInstance = new MittwaldApi\Api\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = 'cart_identifier_example'; // string | Warenkorb ID
$payload = new \MittwaldApi\Model\FormularBody2(); // \MittwaldApi\Model\FormularBody2

try {
    $result = $apiInstance->verifyRecommendCart($cart_identifier, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->verifyRecommendCart: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
