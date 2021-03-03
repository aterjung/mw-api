# MittwaldApi\SubdomainApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubdomain()**](SubdomainApi.md#createSubdomain) | **POST** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain erstellen
[**deleteSubdomain()**](SubdomainApi.md#deleteSubdomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain löschen
[**getSubdomain()**](SubdomainApi.md#getSubdomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains/{subdomainIdentifier} | Subdomain auslesen
[**listSubdomainsByDomain()**](SubdomainApi.md#listSubdomainsByDomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomains eines Accounts auslesen


## `createSubdomain()`

```php
createSubdomain($account_identifier, $domain_identifier, $body): \MittwaldApi\Model\Subdomain[]
```

Subdomain erstellen

Erstellt eine neue Subdomain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\SubdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$domain_identifier = 'domain_identifier_example'; // string | Vollständiger Name der Domain
$body = array(new \MittwaldApi\Model\SubdomainCreationBody()); // \MittwaldApi\Model\SubdomainCreationBody[] | Daten der neuen Subdomain

try {
    $result = $apiInstance->createSubdomain($account_identifier, $domain_identifier, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainApi->createSubdomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |
 **body** | [**\MittwaldApi\Model\SubdomainCreationBody[]**](../Model/SubdomainCreationBody.md)| Daten der neuen Subdomain |

### Return type

[**\MittwaldApi\Model\Subdomain[]**](../Model/Subdomain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubdomain()`

```php
deleteSubdomain($account_identifier, $domain_identifier)
```

Subdomain löschen

Löscht eine bestehende Subdomain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\SubdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$domain_identifier = 'domain_identifier_example'; // string | Vollständiger Name der Domain

try {
    $apiInstance->deleteSubdomain($account_identifier, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainApi->deleteSubdomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |

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

## `getSubdomain()`

```php
getSubdomain($account_identifier, $domain_identifier, $subdomain_identifier): \MittwaldApi\Model\Subdomain
```

Subdomain auslesen

Liefert eine spezifische Subdomain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\SubdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$domain_identifier = 'domain_identifier_example'; // string | Vollständiger Name der Domain
$subdomain_identifier = 'subdomain_identifier_example'; // string | Vollständiger Name der Subdomain

try {
    $result = $apiInstance->getSubdomain($account_identifier, $domain_identifier, $subdomain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainApi->getSubdomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |
 **subdomain_identifier** | **string**| Vollständiger Name der Subdomain |

### Return type

[**\MittwaldApi\Model\Subdomain**](../Model/Subdomain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubdomainsByDomain()`

```php
listSubdomainsByDomain($account_identifier, $domain_identifier): \MittwaldApi\Model\Subdomain[]
```

Subdomains eines Accounts auslesen

Liefert alle verfügbaren Subdomains eines Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\SubdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$domain_identifier = 'domain_identifier_example'; // string | Vollständiger Name der Domain

try {
    $result = $apiInstance->listSubdomainsByDomain($account_identifier, $domain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainApi->listSubdomainsByDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |

### Return type

[**\MittwaldApi\Model\Subdomain[]**](../Model/Subdomain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
