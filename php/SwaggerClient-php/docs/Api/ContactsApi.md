# Swagger\Client\ContactsApi

All URIs are relative to *https://virtserver.swaggerhub.com/joeygiordano13/CookieBookAPI/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContact**](ContactsApi.md#addContact) | **POST** /AddContact.php | Adds a contact to table.
[**searchContact**](ContactsApi.md#searchContact) | **POST** /SearchContactsByName.php | Searches for contacts with first or last name matching search criterion.


# **addContact**
> addContact($contact_item)

Adds a contact to table.

Adds a user to contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact_item = new \Swagger\Client\Model\AddContact(); // \Swagger\Client\Model\AddContact | Add the contact.

try {
    $apiInstance->addContact($contact_item);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_item** | [**\Swagger\Client\Model\AddContact**](../Model/AddContact.md)| Add the contact. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContact**
> searchContact($search_item)

Searches for contacts with first or last name matching search criterion.

Searches for a contact(s).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_item = new \Swagger\Client\Model\SearchContactsByName(); // \Swagger\Client\Model\SearchContactsByName | Search by name.

try {
    $apiInstance->searchContact($search_item);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_item** | [**\Swagger\Client\Model\SearchContactsByName**](../Model/SearchContactsByName.md)| Search by name. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

