# # Cart

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**items** | [**\MittwaldApi\Model\Article[]**](Article.md) |  | [optional]
**jwt** | **string** | Set a new jwt for this cart. | [optional]
**promotion_code** | **string** |  | [optional]
**newsletter** | **bool** |  | [optional]
**offer** | **float** |  | [optional]
**software** | **string** | The software to install for the order. | [optional]
**os** | **string** | The operating system to install for the order. | [optional]
**note** | **string** | Store a customer note for the order. | [optional]
**mysql_version** | **string** | The MySQL-Version to use for the order. | [optional]
**database_partition_percentage** | **float** | The database partition ratio. Must be between 20 &amp; 80 %. | [optional]
**source_account** | **string** | Only for upgrades/extract: The UID or name of the source account. | [optional]
**source_reseller** | **string** | Only for upgrades/extract: The UID or name of the source reseller. | [optional]
**agency_server** | **float** | The UID of the target agency server. | [optional]
**stay_on_hardware** | **bool** | Keep your existing hardware | [optional]
**testing** | **bool** | Is order an testaccount? | [optional]
**billing_period** | **float** | Billing period for main order item | [optional]
**customer_billing_period** | **float** | Billing period for whole customer | [optional]
**commission** | **string** | The code from the partnerprogram | [optional]
**is_commission_locked** | **bool** | If enabled, nobody can remove/change the commission code. Default&#x3D;false | [optional]
**due_date** | **float** | Unix timestamp of the due date of the order (wish order execution date). | [optional]
**project_name** | **string** | Your description for the account. | [optional]
**project_password** | **string** | Your password for the account. Will be encrypted after setting this value. | [optional]
**contract_partner** | [**\MittwaldApi\Model\Contact**](Contact.md) |  | [optional]
**contact_person** | [**\MittwaldApi\Model\Contact**](Contact.md) |  | [optional]
**billing_address** | [**\MittwaldApi\Model\Contact**](Contact.md) |  | [optional]
**payment_settings** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
