# MittwaldApi\TicketsApi

All URIs are relative to https://api.mittwald.de/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**answerSupportTicket()**](TicketsApi.md#answerSupportTicket) | **POST** /tickets/{ticketIdentifier}/answers | Ticketantwort erstellen
[**createSupportTicket()**](TicketsApi.md#createSupportTicket) | **POST** /tickets | Neues Support-Ticket
[**listSupportTicketAnswers()**](TicketsApi.md#listSupportTicketAnswers) | **GET** /tickets/{ticketIdentifier}/answers | Ticketantworten auslesen
[**listSupportTickets()**](TicketsApi.md#listSupportTickets) | **GET** /customers/{customerNumber}/tickets | Support-Tickets auslesen


## `answerSupportTicket()`

```php
answerSupportTicket($ticket_identifier, $answer): \MittwaldApi\Model\TicketAnswer
```

Ticketantwort erstellen

Erstellt eine neue Antwort auf ein Support-Ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_identifier = NULL; // mixed | Die Ticket-ID
$answer = new \MittwaldApi\Model\TicketAnswerInput(); // \MittwaldApi\Model\TicketAnswerInput | Die neue Antwort

try {
    $result = $apiInstance->answerSupportTicket($ticket_identifier, $answer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->answerSupportTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_identifier** | [**mixed**](../Model/.md)| Die Ticket-ID |
 **answer** | [**\MittwaldApi\Model\TicketAnswerInput**](../Model/TicketAnswerInput.md)| Die neue Antwort |

### Return type

[**\MittwaldApi\Model\TicketAnswer**](../Model/TicketAnswer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSupportTicket()`

```php
createSupportTicket($ticket): \MittwaldApi\Model\Ticket
```

Neues Support-Ticket

Erstellt ein neues Support-Ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket = new \MittwaldApi\Model\TicketInput(); // \MittwaldApi\Model\TicketInput | Das neue Support-Ticket

try {
    $result = $apiInstance->createSupportTicket($ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createSupportTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | [**\MittwaldApi\Model\TicketInput**](../Model/TicketInput.md)| Das neue Support-Ticket |

### Return type

[**\MittwaldApi\Model\Ticket**](../Model/Ticket.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSupportTicketAnswers()`

```php
listSupportTicketAnswers($ticket_identifier): \MittwaldApi\Model\TicketAnswer[]
```

Ticketantworten auslesen

Liefert alle Antworten auf ein bestimmtes Support-Ticket zurück

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_identifier = NULL; // mixed | Die Ticket-ID

try {
    $result = $apiInstance->listSupportTicketAnswers($ticket_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->listSupportTicketAnswers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_identifier** | [**mixed**](../Model/.md)| Die Ticket-ID |

### Return type

[**\MittwaldApi\Model\TicketAnswer[]**](../Model/TicketAnswer.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSupportTickets()`

```php
listSupportTickets($customer_number): \MittwaldApi\Model\Ticket[]
```

Support-Tickets auslesen

Listet Support-Tickets eines Kunden auf

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_number = NULL; // mixed | Die Kundennummer

try {
    $result = $apiInstance->listSupportTickets($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->listSupportTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | [**mixed**](../Model/.md)| Die Kundennummer |

### Return type

[**\MittwaldApi\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
