# MittwaldApi\SoftwareApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSoftwareInstallation()**](SoftwareApi.md#getSoftwareInstallation) | **GET** /installations/{installationIdentifier} | Details einer Softwareinstallation auslesen
[**listSoftwareInstallationExtensions()**](SoftwareApi.md#listSoftwareInstallationExtensions) | **GET** /installations/{installationIdentifier}/extensions | Extensions einer Softwareinstallation auslesen
[**listSoftwareInstallationsByAccount()**](SoftwareApi.md#listSoftwareInstallationsByAccount) | **GET** /accounts/{accountIdentifier}/installations | Softwareinstallationen auslesen
[**listSoftwares()**](SoftwareApi.md#listSoftwares) | **GET** /software | Unterstützte Software auslesen


## `getSoftwareInstallation()`

```php
getSoftwareInstallation($installation_identifier): \MittwaldApi\Model\SoftwareInstallation
```

Details einer Softwareinstallation auslesen

Diese Operation liest Details zu einer ganz bestimmten Softwareinstallation aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$installation_identifier = 'installation_identifier_example'; // string | ID einer Software-Installation

try {
    $result = $apiInstance->getSoftwareInstallation($installation_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->getSoftwareInstallation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **installation_identifier** | **string**| ID einer Software-Installation |

### Return type

[**\MittwaldApi\Model\SoftwareInstallation**](../Model/SoftwareInstallation.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSoftwareInstallationExtensions()`

```php
listSoftwareInstallationExtensions($installation_identifier): \MittwaldApi\Model\SoftwareExtension[]
```

Extensions einer Softwareinstallation auslesen

Diese Operation liest Extensions aus, die in einer bestimmten Softwareinstallation installiert sind.  **Hinweis**: Diese Daten werden in der Regel einmal täglich aktualisiert.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$installation_identifier = 'installation_identifier_example'; // string | ID einer Software-Installation

try {
    $result = $apiInstance->listSoftwareInstallationExtensions($installation_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->listSoftwareInstallationExtensions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **installation_identifier** | **string**| ID einer Software-Installation |

### Return type

[**\MittwaldApi\Model\SoftwareExtension[]**](../Model/SoftwareExtension.md)

### Authorization

[Bearer](../../README.md#Bearer)

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


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts
$install_path = 'install_path_example'; // string | Filtert Software-Installationen nach Installationspfad (z.B. `&installPath=%2Fhtml%2Ftypo3`)

try {
    $result = $apiInstance->listSoftwareInstallationsByAccount($account_identifier, $install_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->listSoftwareInstallationsByAccount: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSoftwares()`

```php
listSoftwares(): \MittwaldApi\Model\Software[]
```

Unterstützte Software auslesen

Liest die mögliche Software für eine Neu-Bestellung aus

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSoftwares();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->listSoftwares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\Software[]**](../Model/Software.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
