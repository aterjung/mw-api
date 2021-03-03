# MittwaldApi\AccountsApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount()**](AccountsApi.md#getAccount) | **GET** /accounts/{accountIdentifier} | Account auslesen
[**listAccountsByCustomer()**](AccountsApi.md#listAccountsByCustomer) | **GET** /customers/{customerNumber}/accounts | Accounts eines Kunden
[**listSoftwareInstallationsByAccount()**](AccountsApi.md#listSoftwareInstallationsByAccount) | **GET** /accounts/{accountIdentifier}/installations | Softwareinstallationen auslesen


## `getAccount()`

```php
getAccount($account_identifier): \MittwaldApi\Model\Account
```

Account auslesen

Diese Operation liest genaue Daten eines einzelnen Accounts aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts

try {
    $result = $apiInstance->getAccount($account_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |

### Return type

[**\MittwaldApi\Model\Account**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountsByCustomer()`

```php
listAccountsByCustomer($customer_number, $advised, $owned): \MittwaldApi\Model\Account[]
```

Accounts eines Kunden

Diese Ressource enthält eine Sammlung aller Accounts eines Kunden.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer
$advised = false; // bool | Dieser Parameter steuert, ob auch Accounts zurückgeliefert werden sollen, für die eine Verwaltungsfreigabe besteht, aber nicht zur Kundennummer `{customerNumber}` gehören.'
$owned = true; // bool | Dieser Parameter steuert, ob Accounts zurückgeliefert werden sollen, die direkt der Kundennummer `{customerNumber}` gehören. Dieser Parameter hat standardmäßig den Wert `true`; über den Wert `false` können in Kombination mit dem Parameter `advised` ausschließlich Accounts abgefragt werden, für die eine Verwaltungsfreigabe besteht.

try {
    $result = $apiInstance->listAccountsByCustomer($customer_number, $advised, $owned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listAccountsByCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **advised** | **bool**| Dieser Parameter steuert, ob auch Accounts zurückgeliefert werden sollen, für die eine Verwaltungsfreigabe besteht, aber nicht zur Kundennummer &#x60;{customerNumber}&#x60; gehören.&#39; | [optional] [default to false]
 **owned** | **bool**| Dieser Parameter steuert, ob Accounts zurückgeliefert werden sollen, die direkt der Kundennummer &#x60;{customerNumber}&#x60; gehören. Dieser Parameter hat standardmäßig den Wert &#x60;true&#x60;; über den Wert &#x60;false&#x60; können in Kombination mit dem Parameter &#x60;advised&#x60; ausschließlich Accounts abgefragt werden, für die eine Verwaltungsfreigabe besteht. | [optional] [default to true]

### Return type

[**\MittwaldApi\Model\Account[]**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSoftwareInstallationsByAccount()`

```php
listSoftwareInstallationsByAccount($account_identifier, $install_path): \MittwaldApi\Model\SoftwareInstallation[]
```

Softwareinstallationen auslesen

Diese Operation liest alle Softwareinstallationen eines einzelnen Accounts aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MittwaldApi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$install_path = 'install_path_example'; // string | Filtert Software-Installationen nach Installationspfad (z.B. `&installPath=%2Fhtml%2Ftypo3`)

try {
    $result = $apiInstance->listSoftwareInstallationsByAccount($account_identifier, $install_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listSoftwareInstallationsByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **install_path** | **string**| Filtert Software-Installationen nach Installationspfad (z.B. &#x60;&amp;installPath&#x3D;%2Fhtml%2Ftypo3&#x60;) | [optional]

### Return type

[**\MittwaldApi\Model\SoftwareInstallation[]**](../Model/SoftwareInstallation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
