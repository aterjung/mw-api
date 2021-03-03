# MittwaldApi\DSGVOVertrgeApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptGDPRContract()**](DSGVOVertrgeApi.md#acceptGDPRContract) | **POST** /gdpr/contracts/{contractIdentifier}/actions/accept&#39; | Vertrag - Akzeptiert den Vertrag
[**createGDPRContract()**](DSGVOVertrgeApi.md#createGDPRContract) | **POST** /gdpr/contracts | Vertrag - Vertrag anlegen
[**createGDPRContractPDF()**](DSGVOVertrgeApi.md#createGDPRContractPDF) | **POST** /gdpr/contracts/{contractIdentifier}/actions/pdf&#39; | Vertrag - Liefert ein PDF zu einem bestimmten Vertrag
[**createGDPRContractPresets()**](DSGVOVertrgeApi.md#createGDPRContractPresets) | **POST** /gdpr/contract-presets | Vertragskonfiguration - Speichert eine Vertrags-Konfiguration
[**deleteGDPRContract()**](DSGVOVertrgeApi.md#deleteGDPRContract) | **DELETE** /gdpr/contracts/{contractIdentifier} | Vertrag - Löscht einen bestimmten Vertrag
[**deleteGDPRPDF()**](DSGVOVertrgeApi.md#deleteGDPRPDF) | **DELETE** /gdpr/pdfs/{pdfIdentifier} | PDF - Löscht ein bestimmtes Vertrags-PDF
[**downloadGDPRPDF()**](DSGVOVertrgeApi.md#downloadGDPRPDF) | **POST** /gdpr/pdfs/{pdfIdentifier}/actions/download&#39; | PDF - Stellt ein Vertrags-PDF zum Download bereit
[**getGDPRContract()**](DSGVOVertrgeApi.md#getGDPRContract) | **GET** /gdpr/contracts/{contractIdentifier} | Vertrag - Liefert einen bestimmten Vertrag
[**getGDPRContractPreset()**](DSGVOVertrgeApi.md#getGDPRContractPreset) | **GET** /gdpr/contract-presets/{contractPresetIdentifier} | Vertragskonfiguration - Liefert eine bestimmte Vertrags-Konfiguration
[**getGDPRContractPresets()**](DSGVOVertrgeApi.md#getGDPRContractPresets) | **GET** /gdpr/contract-presets | Vertragskonfiguration - Liefert alle gespeicherten Vertrags-Konfigurationen
[**getGDPRContracts()**](DSGVOVertrgeApi.md#getGDPRContracts) | **GET** /gdpr/contracts | Vertrag - Liefert alle hinterlegten Verträge
[**getGDPRPDF()**](DSGVOVertrgeApi.md#getGDPRPDF) | **GET** /gdpr/pdfs/{pdfIdentifier} | PDF - Liefert ein bestimmtes Vertrags-PDF
[**getGDPRPDFs()**](DSGVOVertrgeApi.md#getGDPRPDFs) | **GET** /gdpr/pdfs | PDF - Liefert die Daten der Vertrags-PDFs
[**sendGDPRContractMail()**](DSGVOVertrgeApi.md#sendGDPRContractMail) | **POST** /gdpr/contracts/{contractIdentifier}/actions/mail&#39; | Vertrag - Verschickt eine E-Mail mit PDF an den Empfänger des Vertrags
[**uploadGDPRPDF()**](DSGVOVertrgeApi.md#uploadGDPRPDF) | **POST** /gdpr/pdfs | PDF - Vertrags-PDF hochladen


## `acceptGDPRContract()`

```php
acceptGDPRContract($contract_identifier, $acceptance)
```

Vertrag - Akzeptiert den Vertrag

Akzeptiert den Vertrag und verschickt diesen bei Bedarf als PDF via E-Mail an beide Vertragspartner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages
$acceptance = new \MittwaldApi\Model\AcceptGDPRContractRequest(); // \MittwaldApi\Model\AcceptGDPRContractRequest

try {
    $apiInstance->acceptGDPRContract($contract_identifier, $acceptance);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->acceptGDPRContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |
 **acceptance** | [**\MittwaldApi\Model\AcceptGDPRContractRequest**](../Model/AcceptGDPRContractRequest.md)|  | [optional]

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

## `createGDPRContract()`

```php
createGDPRContract($create_gdpr_contract_request): \MittwaldApi\Model\GDPRContract
```

Vertrag - Vertrag anlegen

Legt einen Vertrag mit den angegebenen Daten an

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_gdpr_contract_request = new \MittwaldApi\Model\CreateGDPRContractRequest(); // \MittwaldApi\Model\CreateGDPRContractRequest | Die Vertragsdaten

try {
    $result = $apiInstance->createGDPRContract($create_gdpr_contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->createGDPRContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_gdpr_contract_request** | [**\MittwaldApi\Model\CreateGDPRContractRequest**](../Model/CreateGDPRContractRequest.md)| Die Vertragsdaten |

### Return type

[**\MittwaldApi\Model\GDPRContract**](../Model/GDPRContract.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGDPRContractPDF()`

```php
createGDPRContractPDF($contract_identifier)
```

Vertrag - Liefert ein PDF zu einem bestimmten Vertrag

Liefert das PDF des Inhalts eines bestimmten Vertrages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages

try {
    $apiInstance->createGDPRContractPDF($contract_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->createGDPRContractPDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |

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

## `createGDPRContractPresets()`

```php
createGDPRContractPresets($create_gdpr_contract_presets_request): \MittwaldApi\Model\GDPRContractPreset
```

Vertragskonfiguration - Speichert eine Vertrags-Konfiguration

Speichert eine Vertrags-Konfiguration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_gdpr_contract_presets_request = new \MittwaldApi\Model\GDPRContractPreset(); // \MittwaldApi\Model\GDPRContractPreset

try {
    $result = $apiInstance->createGDPRContractPresets($create_gdpr_contract_presets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->createGDPRContractPresets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_gdpr_contract_presets_request** | [**\MittwaldApi\Model\GDPRContractPreset**](../Model/GDPRContractPreset.md)|  |

### Return type

[**\MittwaldApi\Model\GDPRContractPreset**](../Model/GDPRContractPreset.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGDPRContract()`

```php
deleteGDPRContract($contract_identifier)
```

Vertrag - Löscht einen bestimmten Vertrag

Löscht einen bestimmten Vertrag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages

try {
    $apiInstance->deleteGDPRContract($contract_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->deleteGDPRContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |

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

## `deleteGDPRPDF()`

```php
deleteGDPRPDF($pdf_identifier)
```

PDF - Löscht ein bestimmtes Vertrags-PDF

Löscht ein bestimmtes manuell hochgeladenes Vertrags-PDF des Kunden

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pdf_identifier = 'pdf_identifier_example'; // string | Die ID des Vertrags-PDFs

try {
    $apiInstance->deleteGDPRPDF($pdf_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->deleteGDPRPDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_identifier** | **string**| Die ID des Vertrags-PDFs |

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

## `downloadGDPRPDF()`

```php
downloadGDPRPDF($pdf_identifier)
```

PDF - Stellt ein Vertrags-PDF zum Download bereit

Stellt ein manuell hochgeladenes Vertrags-PDF zum Download bereit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pdf_identifier = 'pdf_identifier_example'; // string | Die ID des Vertrags-PDFs

try {
    $apiInstance->downloadGDPRPDF($pdf_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->downloadGDPRPDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_identifier** | **string**| Die ID des Vertrags-PDFs |

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

## `getGDPRContract()`

```php
getGDPRContract($contract_identifier): \MittwaldApi\Model\GDPRContract
```

Vertrag - Liefert einen bestimmten Vertrag

Liefert die Daten eines bestimmten Vertrages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages

try {
    $result = $apiInstance->getGDPRContract($contract_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |

### Return type

[**\MittwaldApi\Model\GDPRContract**](../Model/GDPRContract.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGDPRContractPreset()`

```php
getGDPRContractPreset($contract_preset_identifier): \MittwaldApi\Model\GDPRContractPreset
```

Vertragskonfiguration - Liefert eine bestimmte Vertrags-Konfiguration

Liefert eine bestimmte Vertrags-Konfiguration des Kunden

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_preset_identifier = 'contract_preset_identifier_example'; // string | Die ID der Vertrags-Konfiguration

try {
    $result = $apiInstance->getGDPRContractPreset($contract_preset_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRContractPreset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_preset_identifier** | **string**| Die ID der Vertrags-Konfiguration |

### Return type

[**\MittwaldApi\Model\GDPRContractPreset**](../Model/GDPRContractPreset.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGDPRContractPresets()`

```php
getGDPRContractPresets(): \MittwaldApi\Model\GDPRContractPreset[]
```

Vertragskonfiguration - Liefert alle gespeicherten Vertrags-Konfigurationen

Liefert alle gespeicherten Vertrags-Konfigurationen des Kunden

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGDPRContractPresets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRContractPresets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\GDPRContractPreset[]**](../Model/GDPRContractPreset.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGDPRContracts()`

```php
getGDPRContracts(): \MittwaldApi\Model\GDPRContract[]
```

Vertrag - Liefert alle hinterlegten Verträge

Liefert die Daten aller hinterlegten Verträge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGDPRContracts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\GDPRContract[]**](../Model/GDPRContract.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGDPRPDF()`

```php
getGDPRPDF($pdf_identifier): \MittwaldApi\Model\GDPRPDF
```

PDF - Liefert ein bestimmtes Vertrags-PDF

Liefert ein bestimmtes manuell hochgeladenes Vertrags-PDF des Kunden

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pdf_identifier = 'pdf_identifier_example'; // string | Die ID des Vertrags-PDFs

try {
    $result = $apiInstance->getGDPRPDF($pdf_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRPDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_identifier** | **string**| Die ID des Vertrags-PDFs |

### Return type

[**\MittwaldApi\Model\GDPRPDF**](../Model/GDPRPDF.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGDPRPDFs()`

```php
getGDPRPDFs(): \MittwaldApi\Model\GDPRPDF[]
```

PDF - Liefert die Daten der Vertrags-PDFs

Liefert die Daten der vom Kunden manuell hochgeladenen Vertrags-PDFs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGDPRPDFs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRPDFs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\GDPRPDF[]**](../Model/GDPRPDF.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendGDPRContractMail()`

```php
sendGDPRContractMail($contract_identifier, $contract_mail)
```

Vertrag - Verschickt eine E-Mail mit PDF an den Empfänger des Vertrags

Verschickt eine E-Mail mit dem Vertrag in PDF-Form an den Empfänger des Vertrags. Die E-Mail enthält zudem einen Bestätigungslink, über den dem Vertrag digital zugestimmt werden kann.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages
$contract_mail = new \MittwaldApi\Model\SendMailForGDPRContractRequest(); // \MittwaldApi\Model\SendMailForGDPRContractRequest

try {
    $apiInstance->sendGDPRContractMail($contract_identifier, $contract_mail);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->sendGDPRContractMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |
 **contract_mail** | [**\MittwaldApi\Model\SendMailForGDPRContractRequest**](../Model/SendMailForGDPRContractRequest.md)|  | [optional]

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

## `uploadGDPRPDF()`

```php
uploadGDPRPDF($upload_gdprpdf_request): \MittwaldApi\Model\GDPRPDF
```

PDF - Vertrags-PDF hochladen

Lädt einen eigens geschlossenen Vertrag hoch. Dabei werden nur PDF Dateien unterstützt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_gdprpdf_request = new \MittwaldApi\Model\UploadGDPRPDFRequest(); // \MittwaldApi\Model\UploadGDPRPDFRequest

try {
    $result = $apiInstance->uploadGDPRPDF($upload_gdprpdf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->uploadGDPRPDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_gdprpdf_request** | [**\MittwaldApi\Model\UploadGDPRPDFRequest**](../Model/UploadGDPRPDFRequest.md)|  |

### Return type

[**\MittwaldApi\Model\GDPRPDF**](../Model/GDPRPDF.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
