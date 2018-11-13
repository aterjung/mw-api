# Cart

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional] 
**items** | [**\Mittwald\Api\Model\Article[]**](Article.md) |  | [optional] 
**jwt** | **string** | Set a new jwt for this cart. | [optional] 
**promotion_code** | **string** |  | [optional] 
**newsletter** | **bool** |  | [optional] 
**offer** | **float** |  | [optional] 
**software** | **string** | The software to install for the order. | [optional] 
**os** | **string** | The operating system to install for the order. | [optional] 
**note** | **string** | Store a customer note for the order. | [optional] 
**mysql_version** | **string** | The MySQL-Version to use for the order. | [optional] 
**recommended_account** | **string** | The recommended account for this order. | [optional] 
**database_partition_percentage** | **float** | The database partition ratio. Must be between 20 &amp; 80 %. | [optional] 
**contract_partner** | [**\Mittwald\Api\Model\Contact**](Contact.md) |  | [optional] 
**contact_person** | [**\Mittwald\Api\Model\Contact**](Contact.md) |  | [optional] 
**billing_address** | [**\Mittwald\Api\Model\Contact**](Contact.md) |  | [optional] 
**payment_settings** | [**\Mittwald\Api\Model\PaymentSettings**](PaymentSettings.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

