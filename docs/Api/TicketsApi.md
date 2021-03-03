# MittwaldApi\TicketsApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**answerSupportTicket**](TicketsApi.md#answerSupportTicket) | **POST** /tickets/{ticketIdentifier}/answers | Ticketantwort erstellen
[**createSupportTicket**](TicketsApi.md#createSupportTicket) | **POST** /tickets | Neues Support-Ticket
[**listSupportTicketAnswers**](TicketsApi.md#listSupportTicketAnswers) | **GET** /tickets/{ticketIdentifier}/answers | Ticketantworten auslesen
[**listSupportTickets**](TicketsApi.md#listSupportTickets) | **GET** /customers/{customerNumber}/tickets | Support-Tickets auslesen


# **answerSupportTicket**
> \MittwaldApi\Model\TicketAnswer answerSupportTicket($ticket_identifier, $ticket_answer_input)

Ticketantwort erstellen

Erstellt eine neue Antwort auf ein Support-Ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket_identifier = new \stdClass; // object | Die Ticket-ID
$ticket_answer_input = new \MittwaldApi\Model\TicketAnswerInput(); // \MittwaldApi\Model\TicketAnswerInput | Die neue Antwort

try {
    $result = $apiInstance->answerSupportTicket($ticket_identifier, $ticket_answer_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->answerSupportTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_identifier** | [**object**](../Model/.md)| Die Ticket-ID |
 **ticket_answer_input** | [**\MittwaldApi\Model\TicketAnswerInput**](../Model/TicketAnswerInput.md)| Die neue Antwort |

### Return type

[**\MittwaldApi\Model\TicketAnswer**](../Model/TicketAnswer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSupportTicket**
> \MittwaldApi\Model\Ticket createSupportTicket($ticket_input)

Neues Support-Ticket

Erstellt ein neues Support-Ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket_input = new \MittwaldApi\Model\TicketInput(); // \MittwaldApi\Model\TicketInput | Das neue Support-Ticket

try {
    $result = $apiInstance->createSupportTicket($ticket_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createSupportTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_input** | [**\MittwaldApi\Model\TicketInput**](../Model/TicketInput.md)| Das neue Support-Ticket |

### Return type

[**\MittwaldApi\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSupportTicketAnswers**
> \MittwaldApi\Model\TicketAnswer[] listSupportTicketAnswers($ticket_identifier)

Ticketantworten auslesen

Liefert alle Antworten auf ein bestimmtes Support-Ticket zurück

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket_identifier = new \stdClass; // object | Die Ticket-ID

try {
    $result = $apiInstance->listSupportTicketAnswers($ticket_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->listSupportTicketAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_identifier** | [**object**](../Model/.md)| Die Ticket-ID |

### Return type

[**\MittwaldApi\Model\TicketAnswer[]**](../Model/TicketAnswer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSupportTickets**
> \MittwaldApi\Model\Ticket[] listSupportTickets($customer_number)

Support-Tickets auslesen

Listet Support-Tickets eines Kunden auf

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MittwaldApi\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = new \stdClass; // object | Die Kundennummer

try {
    $result = $apiInstance->listSupportTickets($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->listSupportTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | [**object**](../Model/.md)| Die Kundennummer |

### Return type

[**\MittwaldApi\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

