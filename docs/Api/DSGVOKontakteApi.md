# MittwaldApi\DSGVOKontakteApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGDPRContact**](DSGVOKontakteApi.md#createGDPRContact) | **POST** /gdpr/contacts | Kontakt - Adressdaten anlegen
[**getGDPRContact**](DSGVOKontakteApi.md#getGDPRContact) | **GET** /gdpr/contacts/{contactIdentifier} | Kontakt - Liefert einen bestimmten Adressdatensatz
[**getGDPRContacts**](DSGVOKontakteApi.md#getGDPRContacts) | **GET** /gdpr/contacts | Kontakt - Liefert alle hinterlegten Adressdaten


# **createGDPRContact**
> \MittwaldApi\Model\GDPRContact createGDPRContact($gdpr_contact)

Kontakt - Adressdaten anlegen

Legt einen Adressdatensatz mit den angegebenen Daten an

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOKontakteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gdpr_contact = new \MittwaldApi\Model\GDPRContact(); // \MittwaldApi\Model\GDPRContact | Die Adressdaten

try {
    $result = $apiInstance->createGDPRContact($gdpr_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOKontakteApi->createGDPRContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gdpr_contact** | [**\MittwaldApi\Model\GDPRContact**](../Model/GDPRContact.md)| Die Adressdaten |

### Return type

[**\MittwaldApi\Model\GDPRContact**](../Model/GDPRContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRContact**
> \MittwaldApi\Model\GDPRContact getGDPRContact($contact_identifier)

Kontakt - Liefert einen bestimmten Adressdatensatz

Liefert die Daten eines bestimmten Adressdatensatzes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOKontakteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_identifier = 'contact_identifier_example'; // string | Die ID des Adressdatensatzes

try {
    $result = $apiInstance->getGDPRContact($contact_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOKontakteApi->getGDPRContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_identifier** | **string**| Die ID des Adressdatensatzes |

### Return type

[**\MittwaldApi\Model\GDPRContact**](../Model/GDPRContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRContacts**
> \MittwaldApi\Model\GDPRContact[] getGDPRContacts($type)

Kontakt - Liefert alle hinterlegten Adressdaten

Liefert die Daten aller hinterlegten Adressdaten

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\DSGVOKontakteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Filterung der Kontakte nach einem bestimmten Typ

try {
    $result = $apiInstance->getGDPRContacts($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOKontakteApi->getGDPRContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Filterung der Kontakte nach einem bestimmten Typ | [optional]

### Return type

[**\MittwaldApi\Model\GDPRContact[]**](../Model/GDPRContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

