# # VirtualAccountOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **int** |  | [readonly]
**name** | **string** |  | [readonly]
**description** | **string** |  |
**virtual_name** | **string** |  | [readonly]
**article** | [**\MittwaldApi\Model\Article**](Article.md) |  |
**password** | **string** | Das Passwort des neu angelegten Accounts. Dieses Passwort ist **nur** in der Antwort auf die Anfrage, die den Account erstellt hat, enthalten; nachfolgende Antworten (z.B. &#x60;GET&#x60;-Requests auf den Account) werden das Passwort nicht mehr enthalten. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
