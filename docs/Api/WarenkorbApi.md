# MittwaldApi\WarenkorbApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDomainToCart**](WarenkorbApi.md#addDomainToCart) | **POST** /carts/{cartIdentifier}/domains | Warenkorb-Domainposition hinzufügen
[**addItemToCart**](WarenkorbApi.md#addItemToCart) | **POST** /carts/{cartIdentifier}/items | Warenkorb-Position hinzufügen
[**checkoutOrder**](WarenkorbApi.md#checkoutOrder) | **POST** /carts/{cartIdentifier}/actions/checkout | Bestellung abschließen
[**confirmSMSVerification**](WarenkorbApi.md#confirmSMSVerification) | **POST** /carts/{cartIdentifier}/actions/verify | SMS-Verifizierung bestätigen
[**createCart**](WarenkorbApi.md#createCart) | **POST** /carts | Warenkorb erstellen
[**createCartFromTemplate**](WarenkorbApi.md#createCartFromTemplate) | **POST** /carts/{cartIdentifier} | Warenkorb aus Vorlage erstellen
[**createQuoteFromCart**](WarenkorbApi.md#createQuoteFromCart) | **POST** /carts/{cartIdentifier}/actions/offer | Angebot versenden
[**deleteCart**](WarenkorbApi.md#deleteCart) | **DELETE** /carts/{cartIdentifier} | Warenkorb löschen
[**deleteItemFromCart**](WarenkorbApi.md#deleteItemFromCart) | **DELETE** /carts/{cartIdentifier}/items/{itemIdentifier} | Warenkorb-Position löschen
[**getCart**](WarenkorbApi.md#getCart) | **GET** /carts/{cartIdentifier} | Warenkorb auslesen
[**recommendCart**](WarenkorbApi.md#recommendCart) | **POST** /carts/{cartIdentifier}/actions/recommend | Warenkorbvorlage für Account-Ausgliederung erstellen
[**requestSMSVerification**](WarenkorbApi.md#requestSMSVerification) | **POST** /carts/{cartIdentifier}/actions/requestverification | SMS-Verifizierung starten
[**shareCart**](WarenkorbApi.md#shareCart) | **POST** /carts/{cartIdentifier}/actions/share | Warenkorbvorlage erstellen
[**updateCart**](WarenkorbApi.md#updateCart) | **PUT** /carts/{cartIdentifier} | Warenkorb bearbeiten
[**verifyRecommendCart**](WarenkorbApi.md#verifyRecommendCart) | **POST** /carts/{cartIdentifier}/actions/recommendation/verify | Überprüfe PIN-Code von Empfehlung


# **addDomainToCart**
> \MittwaldApi\Model\Cart addDomainToCart($cart_identifier, $domain_item_input)

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
$domain_item_input = new \MittwaldApi\Model\DomainItemInput(); // \MittwaldApi\Model\DomainItemInput | Die hinzuzufügende Domain

try {
    $result = $apiInstance->addDomainToCart($cart_identifier, $domain_item_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->addDomainToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **domain_item_input** | [**\MittwaldApi\Model\DomainItemInput**](../Model/DomainItemInput.md)| Die hinzuzufügende Domain |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemToCart**
> \MittwaldApi\Model\Cart addItemToCart($cart_identifier, $cart_item_input)

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
$cart_item_input = new \MittwaldApi\Model\CartItemInput(); // \MittwaldApi\Model\CartItemInput | Das hinzuzufügende Item

try {
    $result = $apiInstance->addItemToCart($cart_identifier, $cart_item_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->addItemToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **cart_item_input** | [**\MittwaldApi\Model\CartItemInput**](../Model/CartItemInput.md)| Das hinzuzufügende Item |

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutOrder**
> checkoutOrder($cart_identifier, $unknown_base_type)

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
$unknown_base_type = new \MittwaldApi\Model\UNKNOWN_BASE_TYPE(); // \MittwaldApi\Model\UNKNOWN_BASE_TYPE | 

try {
    $apiInstance->checkoutOrder($cart_identifier, $unknown_base_type);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->checkoutOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **unknown_base_type** | [**\MittwaldApi\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmSMSVerification**
> confirmSMSVerification($cart_identifier, $unknown_base_type)

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
$unknown_base_type = new \MittwaldApi\Model\UNKNOWN_BASE_TYPE(); // \MittwaldApi\Model\UNKNOWN_BASE_TYPE | Der Verifizierungcode

try {
    $apiInstance->confirmSMSVerification($cart_identifier, $unknown_base_type);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->confirmSMSVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **unknown_base_type** | [**\MittwaldApi\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Der Verifizierungcode |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCart**
> \MittwaldApi\Model\Cart createCart($unknown_base_type)

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
$unknown_base_type = new \MittwaldApi\Model\UNKNOWN_BASE_TYPE(); // \MittwaldApi\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->createCart($unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->createCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unknown_base_type** | [**\MittwaldApi\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\MittwaldApi\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCartFromTemplate**
> \MittwaldApi\Model\Cart createCartFromTemplate($cart_identifier)

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
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createQuoteFromCart**
> createQuoteFromCart($cart_identifier, $contact)

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
$contact = new \MittwaldApi\Model\Contact(); // \MittwaldApi\Model\Contact | Empfänger

try {
    $apiInstance->createQuoteFromCart($cart_identifier, $contact);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->createQuoteFromCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **contact** | [**\MittwaldApi\Model\Contact**](../Model/Contact.md)| Empfänger |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCart**
> deleteCart($cart_identifier)

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
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemFromCart**
> \MittwaldApi\Model\Cart deleteItemFromCart($cart_identifier, $item_identifier)

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
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCart**
> \MittwaldApi\Model\Cart getCart($cart_identifier)

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
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendCart**
> \MittwaldApi\Model\Recommendation recommendCart($cart_identifier)

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
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestSMSVerification**
> requestSMSVerification($cart_identifier, $unknown_base_type)

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
$unknown_base_type = new \MittwaldApi\Model\UNKNOWN_BASE_TYPE(); // \MittwaldApi\Model\UNKNOWN_BASE_TYPE | 

try {
    $apiInstance->requestSMSVerification($cart_identifier, $unknown_base_type);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->requestSMSVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **unknown_base_type** | [**\MittwaldApi\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shareCart**
> \MittwaldApi\Model\Cart shareCart($cart_identifier)

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
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCart**
> \MittwaldApi\Model\Cart updateCart($cart_identifier, $cart)

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
?>
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyRecommendCart**
> \MittwaldApi\Model\Message verifyRecommendCart($cart_identifier, $unknown_base_type)

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
$unknown_base_type = new \MittwaldApi\Model\UNKNOWN_BASE_TYPE(); // \MittwaldApi\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->verifyRecommendCart($cart_identifier, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->verifyRecommendCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **unknown_base_type** | [**\MittwaldApi\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\MittwaldApi\Model\Message**](../Model/Message.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

