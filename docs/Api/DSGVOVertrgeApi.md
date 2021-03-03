# MittwaldApi\DSGVOVertrgeApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptGDPRContract**](DSGVOVertrgeApi.md#acceptGDPRContract) | **POST** /gdpr/contracts/{contractIdentifier}/actions/accept&#39; | Vertrag - Akzeptiert den Vertrag
[**createGDPRContract**](DSGVOVertrgeApi.md#createGDPRContract) | **POST** /gdpr/contracts | Vertrag - Vertrag anlegen
[**createGDPRContractPDF**](DSGVOVertrgeApi.md#createGDPRContractPDF) | **POST** /gdpr/contracts/{contractIdentifier}/actions/pdf&#39; | Vertrag - Liefert ein PDF zu einem bestimmten Vertrag
[**createGDPRContractPresets**](DSGVOVertrgeApi.md#createGDPRContractPresets) | **POST** /gdpr/contract-presets | Vertragskonfiguration - Speichert eine Vertrags-Konfiguration
[**deleteGDPRContract**](DSGVOVertrgeApi.md#deleteGDPRContract) | **DELETE** /gdpr/contracts/{contractIdentifier} | Vertrag - Löscht einen bestimmten Vertrag
[**deleteGDPRPDF**](DSGVOVertrgeApi.md#deleteGDPRPDF) | **DELETE** /gdpr/pdfs/{pdfIdentifier} | PDF - Löscht ein bestimmtes Vertrags-PDF
[**downloadGDPRPDF**](DSGVOVertrgeApi.md#downloadGDPRPDF) | **POST** /gdpr/pdfs/{pdfIdentifier}/actions/download&#39; | PDF - Stellt ein Vertrags-PDF zum Download bereit
[**getGDPRContract**](DSGVOVertrgeApi.md#getGDPRContract) | **GET** /gdpr/contracts/{contractIdentifier} | Vertrag - Liefert einen bestimmten Vertrag
[**getGDPRContractPreset**](DSGVOVertrgeApi.md#getGDPRContractPreset) | **GET** /gdpr/contract-presets/{contractPresetIdentifier} | Vertragskonfiguration - Liefert eine bestimmte Vertrags-Konfiguration
[**getGDPRContractPresets**](DSGVOVertrgeApi.md#getGDPRContractPresets) | **GET** /gdpr/contract-presets | Vertragskonfiguration - Liefert alle gespeicherten Vertrags-Konfigurationen
[**getGDPRContracts**](DSGVOVertrgeApi.md#getGDPRContracts) | **GET** /gdpr/contracts | Vertrag - Liefert alle hinterlegten Verträge
[**getGDPRPDF**](DSGVOVertrgeApi.md#getGDPRPDF) | **GET** /gdpr/pdfs/{pdfIdentifier} | PDF - Liefert ein bestimmtes Vertrags-PDF
[**getGDPRPDFs**](DSGVOVertrgeApi.md#getGDPRPDFs) | **GET** /gdpr/pdfs | PDF - Liefert die Daten der Vertrags-PDFs
[**sendGDPRContractMail**](DSGVOVertrgeApi.md#sendGDPRContractMail) | **POST** /gdpr/contracts/{contractIdentifier}/actions/mail&#39; | Vertrag - Verschickt eine E-Mail mit PDF an den Empfänger des Vertrags
[**uploadGDPRPDF**](DSGVOVertrgeApi.md#uploadGDPRPDF) | **POST** /gdpr/pdfs | PDF - Vertrags-PDF hochladen


# **acceptGDPRContract**
> acceptGDPRContract($contract_identifier, $unknown_base_type)

Vertrag - Akzeptiert den Vertrag

Akzeptiert den Vertrag und verschickt diesen bei Bedarf als PDF via E-Mail an beide Vertragspartner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages
$unknown_base_type = new \MittwaldApi\Model\UNKNOWN_BASE_TYPE(); // \MittwaldApi\Model\UNKNOWN_BASE_TYPE | 

try {
    $apiInstance->acceptGDPRContract($contract_identifier, $unknown_base_type);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->acceptGDPRContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |
 **unknown_base_type** | [**\MittwaldApi\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGDPRContract**
> \MittwaldApi\Model\GDPRContract createGDPRContract($create_gdpr_contract_request)

Vertrag - Vertrag anlegen

Legt einen Vertrag mit den angegebenen Daten an

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_gdpr_contract_request = new \MittwaldApi\Model\CreateGDPRContractRequest(); // \MittwaldApi\Model\CreateGDPRContractRequest | Die Vertragsdaten

try {
    $result = $apiInstance->createGDPRContract($create_gdpr_contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->createGDPRContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_gdpr_contract_request** | [**\MittwaldApi\Model\CreateGDPRContractRequest**](../Model/CreateGDPRContractRequest.md)| Die Vertragsdaten |

### Return type

[**\MittwaldApi\Model\GDPRContract**](../Model/GDPRContract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGDPRContractPDF**
> createGDPRContractPDF($contract_identifier)

Vertrag - Liefert ein PDF zu einem bestimmten Vertrag

Liefert das PDF des Inhalts eines bestimmten Vertrages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages

try {
    $apiInstance->createGDPRContractPDF($contract_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->createGDPRContractPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGDPRContractPresets**
> \MittwaldApi\Model\GDPRContractPreset createGDPRContractPresets($gdpr_contract_preset)

Vertragskonfiguration - Speichert eine Vertrags-Konfiguration

Speichert eine Vertrags-Konfiguration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gdpr_contract_preset = new \MittwaldApi\Model\GDPRContractPreset(); // \MittwaldApi\Model\GDPRContractPreset | 

try {
    $result = $apiInstance->createGDPRContractPresets($gdpr_contract_preset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->createGDPRContractPresets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gdpr_contract_preset** | [**\MittwaldApi\Model\GDPRContractPreset**](../Model/GDPRContractPreset.md)|  |

### Return type

[**\MittwaldApi\Model\GDPRContractPreset**](../Model/GDPRContractPreset.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGDPRContract**
> deleteGDPRContract($contract_identifier)

Vertrag - Löscht einen bestimmten Vertrag

Löscht einen bestimmten Vertrag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages

try {
    $apiInstance->deleteGDPRContract($contract_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->deleteGDPRContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGDPRPDF**
> deleteGDPRPDF($pdf_identifier)

PDF - Löscht ein bestimmtes Vertrags-PDF

Löscht ein bestimmtes manuell hochgeladenes Vertrags-PDF des Kunden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_identifier = 'pdf_identifier_example'; // string | Die ID des Vertrags-PDFs

try {
    $apiInstance->deleteGDPRPDF($pdf_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->deleteGDPRPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_identifier** | **string**| Die ID des Vertrags-PDFs |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadGDPRPDF**
> downloadGDPRPDF($pdf_identifier)

PDF - Stellt ein Vertrags-PDF zum Download bereit

Stellt ein manuell hochgeladenes Vertrags-PDF zum Download bereit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_identifier = 'pdf_identifier_example'; // string | Die ID des Vertrags-PDFs

try {
    $apiInstance->downloadGDPRPDF($pdf_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->downloadGDPRPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_identifier** | **string**| Die ID des Vertrags-PDFs |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRContract**
> \MittwaldApi\Model\GDPRContract getGDPRContract($contract_identifier)

Vertrag - Liefert einen bestimmten Vertrag

Liefert die Daten eines bestimmten Vertrages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages

try {
    $result = $apiInstance->getGDPRContract($contract_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |

### Return type

[**\MittwaldApi\Model\GDPRContract**](../Model/GDPRContract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRContractPreset**
> \MittwaldApi\Model\GDPRContractPreset getGDPRContractPreset($contract_preset_identifier)

Vertragskonfiguration - Liefert eine bestimmte Vertrags-Konfiguration

Liefert eine bestimmte Vertrags-Konfiguration des Kunden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_preset_identifier = 'contract_preset_identifier_example'; // string | Die ID der Vertrags-Konfiguration

try {
    $result = $apiInstance->getGDPRContractPreset($contract_preset_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRContractPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_preset_identifier** | **string**| Die ID der Vertrags-Konfiguration |

### Return type

[**\MittwaldApi\Model\GDPRContractPreset**](../Model/GDPRContractPreset.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRContractPresets**
> \MittwaldApi\Model\GDPRContractPreset[] getGDPRContractPresets()

Vertragskonfiguration - Liefert alle gespeicherten Vertrags-Konfigurationen

Liefert alle gespeicherten Vertrags-Konfigurationen des Kunden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getGDPRContractPresets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRContractPresets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\GDPRContractPreset[]**](../Model/GDPRContractPreset.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRContracts**
> \MittwaldApi\Model\GDPRContract[] getGDPRContracts()

Vertrag - Liefert alle hinterlegten Verträge

Liefert die Daten aller hinterlegten Verträge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getGDPRContracts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\GDPRContract[]**](../Model/GDPRContract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRPDF**
> \MittwaldApi\Model\GDPRPDF getGDPRPDF($pdf_identifier)

PDF - Liefert ein bestimmtes Vertrags-PDF

Liefert ein bestimmtes manuell hochgeladenes Vertrags-PDF des Kunden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_identifier = 'pdf_identifier_example'; // string | Die ID des Vertrags-PDFs

try {
    $result = $apiInstance->getGDPRPDF($pdf_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pdf_identifier** | **string**| Die ID des Vertrags-PDFs |

### Return type

[**\MittwaldApi\Model\GDPRPDF**](../Model/GDPRPDF.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRPDFs**
> \MittwaldApi\Model\GDPRPDF[] getGDPRPDFs()

PDF - Liefert die Daten der Vertrags-PDFs

Liefert die Daten der vom Kunden manuell hochgeladenen Vertrags-PDFs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getGDPRPDFs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->getGDPRPDFs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MittwaldApi\Model\GDPRPDF[]**](../Model/GDPRPDF.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendGDPRContractMail**
> sendGDPRContractMail($contract_identifier, $unknown_base_type)

Vertrag - Verschickt eine E-Mail mit PDF an den Empfänger des Vertrags

Verschickt eine E-Mail mit dem Vertrag in PDF-Form an den Empfänger des Vertrags. Die E-Mail enthält zudem einen Bestätigungslink, über den dem Vertrag digital zugestimmt werden kann.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_identifier = 'contract_identifier_example'; // string | Die ID des Vertrages
$unknown_base_type = new \MittwaldApi\Model\UNKNOWN_BASE_TYPE(); // \MittwaldApi\Model\UNKNOWN_BASE_TYPE | 

try {
    $apiInstance->sendGDPRContractMail($contract_identifier, $unknown_base_type);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->sendGDPRContractMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_identifier** | **string**| Die ID des Vertrages |
 **unknown_base_type** | [**\MittwaldApi\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadGDPRPDF**
> \MittwaldApi\Model\GDPRPDF uploadGDPRPDF($upload_gdprpdf_request)

PDF - Vertrags-PDF hochladen

Lädt einen eigens geschlossenen Vertrag hoch. Dabei werden nur PDF Dateien unterstützt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOVertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$upload_gdprpdf_request = new \MittwaldApi\Model\UploadGDPRPDFRequest(); // \MittwaldApi\Model\UploadGDPRPDFRequest | 

try {
    $result = $apiInstance->uploadGDPRPDF($upload_gdprpdf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOVertrgeApi->uploadGDPRPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_gdprpdf_request** | [**\MittwaldApi\Model\UploadGDPRPDFRequest**](../Model/UploadGDPRPDFRequest.md)|  |

### Return type

[**\MittwaldApi\Model\GDPRPDF**](../Model/GDPRPDF.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

