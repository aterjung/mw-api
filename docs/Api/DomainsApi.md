# MittwaldApi\DomainsApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkDomainAvailability()**](DomainsApi.md#checkDomainAvailability) | **POST** /domains/{domainIdentifier}/actions/check | Domainverfügbarkeit prüfen
[**createSubdomain()**](DomainsApi.md#createSubdomain) | **POST** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain erstellen
[**deleteDomain()**](DomainsApi.md#deleteDomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier} | Domain löschen/kündigen
[**deleteSubdomain()**](DomainsApi.md#deleteSubdomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain löschen
[**domainProxyList()**](DomainsApi.md#domainProxyList) | **GET** /accounts/{accountIdentifier}/domainsproxies | Domain Proxies eines Accounts
[**getDomainAuthCode()**](DomainsApi.md#getDomainAuthCode) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/authcode | Auth-Code einer Domain auslesen
[**getToplevelDomain()**](DomainsApi.md#getToplevelDomain) | **GET** /topleveldomains/{topLevelDomainIdentifier} | Toplevel-Domain auslesen
[**listDomainsByAccount()**](DomainsApi.md#listDomainsByAccount) | **GET** /accounts/{accountIdentifier}/domains | Domains eines Accounts auslesen
[**listSubdomainsByDomain()**](DomainsApi.md#listSubdomainsByDomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomains eines Accounts auslesen
[**listToplevelDomains()**](DomainsApi.md#listToplevelDomains) | **GET** /topleveldomains | Toplevel-Domains auslesen
[**registerNewDomain()**](DomainsApi.md#registerNewDomain) | **POST** /accounts/{accountIdentifier}/domains | Domain registrieren/Transfer einleiten


## `checkDomainAvailability()`

```php
checkDomainAvailability($domain_identifier)
```

Domainverfügbarkeit prüfen

Prüft ob eine Domain verfügbar ist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_identifier = 'domain_identifier_example'; // string | Domain

try {
    $apiInstance->checkDomainAvailability($domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->checkDomainAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_identifier** | **string**| Domain |

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



$apiInstance = new MittwaldApi\Api\DomainsApi(
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
    echo 'Exception when calling DomainsApi->createSubdomain: ', $e->getMessage(), PHP_EOL;
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

## `deleteDomain()`

```php
deleteDomain($account_identifier, $domain_identifier)
```

Domain löschen/kündigen

Löscht bzw. kündigt eine bestehende Domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$domain_identifier = 'domain_identifier_example'; // string | Vollständiger Name der Domain

try {
    $apiInstance->deleteDomain($account_identifier, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$domain_identifier = 'domain_identifier_example'; // string | Vollständiger Name der Domain

try {
    $apiInstance->deleteSubdomain($account_identifier, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteSubdomain: ', $e->getMessage(), PHP_EOL;
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

## `domainProxyList()`

```php
domainProxyList($account_identifier): \MittwaldApi\Model\DomainProxy[]
```

Domain Proxies eines Accounts

Zeige alle aktiven Domain Proxies eines Accounts an

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts

try {
    $result = $apiInstance->domainProxyList($account_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainProxyList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |

### Return type

[**\MittwaldApi\Model\DomainProxy[]**](../Model/DomainProxy.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainAuthCode()`

```php
getDomainAuthCode($account_identifier, $domain_identifier): \MittwaldApi\Model\DomainAuthCode
```

Auth-Code einer Domain auslesen

Liefert den Auth-Code einer Domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$domain_identifier = 'domain_identifier_example'; // string | Vollständiger Name der Domain

try {
    $result = $apiInstance->getDomainAuthCode($account_identifier, $domain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomainAuthCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |

### Return type

[**\MittwaldApi\Model\DomainAuthCode**](../Model/DomainAuthCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getToplevelDomain()`

```php
getToplevelDomain($top_level_domain_identifier, $fields): \MittwaldApi\Model\TopLevelDomain
```

Toplevel-Domain auslesen

Liefert eine Topleveldomain aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$top_level_domain_identifier = 'top_level_domain_identifier_example'; // string | Topleveldomain
$fields = 'fields_example'; // string | Auszuliefernde Felder, als kommaseparierte Liste.

try {
    $result = $apiInstance->getToplevelDomain($top_level_domain_identifier, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getToplevelDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top_level_domain_identifier** | **string**| Topleveldomain |
 **fields** | **string**| Auszuliefernde Felder, als kommaseparierte Liste. | [optional]

### Return type

[**\MittwaldApi\Model\TopLevelDomain**](../Model/TopLevelDomain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDomainsByAccount()`

```php
listDomainsByAccount($account_identifier, $limit, $offset): \MittwaldApi\Model\Domain[]
```

Domains eines Accounts auslesen

Diese Operation liest die Domains eines einzelnen Accounts aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$limit = 20; // int | Anzahl der zurückzuliefernden Domains.
$offset = 0; // int | Offset für die Limitierung der Suchergebnisse

try {
    $result = $apiInstance->listDomainsByAccount($account_identifier, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listDomainsByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **limit** | **int**| Anzahl der zurückzuliefernden Domains. | [optional] [default to 20]
 **offset** | **int**| Offset für die Limitierung der Suchergebnisse | [optional] [default to 0]

### Return type

[**\MittwaldApi\Model\Domain[]**](../Model/Domain.md)

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



$apiInstance = new MittwaldApi\Api\DomainsApi(
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
    echo 'Exception when calling DomainsApi->listSubdomainsByDomain: ', $e->getMessage(), PHP_EOL;
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

## `listToplevelDomains()`

```php
listToplevelDomains(): \MittwaldApi\Model\TopLevelDomain[]
```

Toplevel-Domains auslesen

Liefert alle möglichen Topleveldomains aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listToplevelDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listToplevelDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\TopLevelDomain[]**](../Model/TopLevelDomain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerNewDomain()`

```php
registerNewDomain($account_identifier, $body): \MittwaldApi\Model\Domain[]
```

Domain registrieren/Transfer einleiten

Diese Operation kann genutzt werden, um für den gegebenen Account eine neue Domain zu registrieren oder einen Virtual Host Eintrag zu erstellen. Falls die Domain bereits vergeben ist, müssen ein Auth-Code und unter Umständen ein Authentifizierungsverfahren mitangegeben werden, um einen Domain-Transfer einzuleiten.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$body = new \MittwaldApi\Model\DomainRegistration(); // \MittwaldApi\Model\DomainRegistration | Daten für eine Domain-Registrierung

try {
    $result = $apiInstance->registerNewDomain($account_identifier, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->registerNewDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **body** | [**\MittwaldApi\Model\DomainRegistration**](../Model/DomainRegistration.md)| Daten für eine Domain-Registrierung |

### Return type

[**\MittwaldApi\Model\Domain[]**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
