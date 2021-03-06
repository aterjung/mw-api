# OpenAPIClient-php

Schnittstellen für Mittwald-Kunden


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/aterjung/mw-api.git"
    }
  ],
  "require": {
    "aterjung/mw-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Bearer
$config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MittwaldApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MittwaldApi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_identifier = 'account_identifier_example'; // string | Name oder ID eines Accounts

try {
    $result = $apiInstance->getAccount($account_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.mittwald.de/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /accounts/{accountIdentifier} | Account auslesen
*AccountsApi* | [**listAccountsByCustomer**](docs/Api/AccountsApi.md#listaccountsbycustomer) | **GET** /customers/{customerNumber}/accounts | Accounts eines Kunden
*AccountsApi* | [**listSoftwareInstallationsByAccount**](docs/Api/AccountsApi.md#listsoftwareinstallationsbyaccount) | **GET** /accounts/{accountIdentifier}/installations | Softwareinstallationen auslesen
*AngeboteApi* | [**createQuoteFromCart**](docs/Api/AngeboteApi.md#createquotefromcart) | **POST** /carts/{cartIdentifier}/actions/offer | Angebot versenden
*AngeboteApi* | [**recommendCart**](docs/Api/AngeboteApi.md#recommendcart) | **POST** /carts/{cartIdentifier}/actions/recommend | Warenkorbvorlage für Account-Ausgliederung erstellen
*AngeboteApi* | [**requestQuote**](docs/Api/AngeboteApi.md#requestquote) | **POST** /offers | Neues Angebot anfordern
*AngeboteApi* | [**shareCart**](docs/Api/AngeboteApi.md#sharecart) | **POST** /carts/{cartIdentifier}/actions/share | Warenkorbvorlage erstellen
*AngeboteApi* | [**verifyRecommendCart**](docs/Api/AngeboteApi.md#verifyrecommendcart) | **POST** /carts/{cartIdentifier}/actions/recommendation/verify | Überprüfe PIN-Code von Empfehlung
*ArtikelApi* | [**getArticle**](docs/Api/ArtikelApi.md#getarticle) | **GET** /articles/{articleNumber} | Artikeldetails
*ArtikelApi* | [**getArticleUpgrades**](docs/Api/ArtikelApi.md#getarticleupgrades) | **GET** /articles/{articleNumber}/upgrades | Artikel Upgrades
*ArtikelApi* | [**getCrossSellingOptions**](docs/Api/ArtikelApi.md#getcrosssellingoptions) | **GET** /articles/{articleNumber}/cross-selling | Cross-Selling Optionen
*ArtikelApi* | [**listArticles**](docs/Api/ArtikelApi.md#listarticles) | **GET** /articles | Suche nach Artikeln
*AuthentifizierungApi* | [**authenticate**](docs/Api/AuthentifizierungApi.md#authenticate) | **POST** /authenticate | Anforderung eines neuen API-Tokens
*AuthentifizierungApi* | [**createApplicationToken**](docs/Api/AuthentifizierungApi.md#createapplicationtoken) | **POST** /authentication/tokens | Hinterlegen von neuen Application-Tokens
*AuthentifizierungApi* | [**deleteApplicationToken**](docs/Api/AuthentifizierungApi.md#deleteapplicationtoken) | **DELETE** /authentication/tokens/{uuid} | Löschen von Application-Tokens
*AuthentifizierungApi* | [**listApplicationTokens**](docs/Api/AuthentifizierungApi.md#listapplicationtokens) | **GET** /authentication/tokens | Auslesen von erstellten Application-Tokens
*BankdatenApi* | [**convertBankDataToSEPA**](docs/Api/BankdatenApi.md#convertbankdatatosepa) | **POST** /bankdata/actions/convert | Konvertiert Bankdaten in das IBAN / BIC Format
*BestellungenApi* | [**orderPartnerBox**](docs/Api/BestellungenApi.md#orderpartnerbox) | **POST** /orders/partnerbox | Bestellung eines Partnerbox
*BestellungenApi* | [**orderPartnerProgram**](docs/Api/BestellungenApi.md#orderpartnerprogram) | **POST** /orders/partnerprogram | Anmeldung am Partnerprogramm
*BestellungenApi* | [**orderPreUpgradeCheck**](docs/Api/BestellungenApi.md#orderpreupgradecheck) | **GET** /orders/preUpgradeCheck/{accountIdentifier}/{articleNumber} | Pre-Upgrade Check
*DSGVOKontakteApi* | [**createGDPRContact**](docs/Api/DSGVOKontakteApi.md#creategdprcontact) | **POST** /gdpr/contacts | Kontakt - Adressdaten anlegen
*DSGVOKontakteApi* | [**getGDPRContact**](docs/Api/DSGVOKontakteApi.md#getgdprcontact) | **GET** /gdpr/contacts/{contactIdentifier} | Kontakt - Liefert einen bestimmten Adressdatensatz
*DSGVOKontakteApi* | [**getGDPRContacts**](docs/Api/DSGVOKontakteApi.md#getgdprcontacts) | **GET** /gdpr/contacts | Kontakt - Liefert alle hinterlegten Adressdaten
*DSGVOTOMsApi* | [**createGDPRTom**](docs/Api/DSGVOTOMsApi.md#creategdprtom) | **POST** /gdpr/toms | TOM - TOM anlegen
*DSGVOTOMsApi* | [**getGDPRTom**](docs/Api/DSGVOTOMsApi.md#getgdprtom) | **GET** /gdpr/toms/{tomIdentifier} | TOM - Liefert einen bestimmten TOM
*DSGVOTOMsApi* | [**getGDPRToms**](docs/Api/DSGVOTOMsApi.md#getgdprtoms) | **GET** /gdpr/toms | TOM - Liefert alle hinterlegten TOMs
*DSGVOVertrgeApi* | [**acceptGDPRContract**](docs/Api/DSGVOVertrgeApi.md#acceptgdprcontract) | **POST** /gdpr/contracts/{contractIdentifier}/actions/accept&#39; | Vertrag - Akzeptiert den Vertrag
*DSGVOVertrgeApi* | [**createGDPRContract**](docs/Api/DSGVOVertrgeApi.md#creategdprcontract) | **POST** /gdpr/contracts | Vertrag - Vertrag anlegen
*DSGVOVertrgeApi* | [**createGDPRContractPDF**](docs/Api/DSGVOVertrgeApi.md#creategdprcontractpdf) | **POST** /gdpr/contracts/{contractIdentifier}/actions/pdf&#39; | Vertrag - Liefert ein PDF zu einem bestimmten Vertrag
*DSGVOVertrgeApi* | [**createGDPRContractPresets**](docs/Api/DSGVOVertrgeApi.md#creategdprcontractpresets) | **POST** /gdpr/contract-presets | Vertragskonfiguration - Speichert eine Vertrags-Konfiguration
*DSGVOVertrgeApi* | [**deleteGDPRContract**](docs/Api/DSGVOVertrgeApi.md#deletegdprcontract) | **DELETE** /gdpr/contracts/{contractIdentifier} | Vertrag - Löscht einen bestimmten Vertrag
*DSGVOVertrgeApi* | [**deleteGDPRPDF**](docs/Api/DSGVOVertrgeApi.md#deletegdprpdf) | **DELETE** /gdpr/pdfs/{pdfIdentifier} | PDF - Löscht ein bestimmtes Vertrags-PDF
*DSGVOVertrgeApi* | [**downloadGDPRPDF**](docs/Api/DSGVOVertrgeApi.md#downloadgdprpdf) | **POST** /gdpr/pdfs/{pdfIdentifier}/actions/download&#39; | PDF - Stellt ein Vertrags-PDF zum Download bereit
*DSGVOVertrgeApi* | [**getGDPRContract**](docs/Api/DSGVOVertrgeApi.md#getgdprcontract) | **GET** /gdpr/contracts/{contractIdentifier} | Vertrag - Liefert einen bestimmten Vertrag
*DSGVOVertrgeApi* | [**getGDPRContractPreset**](docs/Api/DSGVOVertrgeApi.md#getgdprcontractpreset) | **GET** /gdpr/contract-presets/{contractPresetIdentifier} | Vertragskonfiguration - Liefert eine bestimmte Vertrags-Konfiguration
*DSGVOVertrgeApi* | [**getGDPRContractPresets**](docs/Api/DSGVOVertrgeApi.md#getgdprcontractpresets) | **GET** /gdpr/contract-presets | Vertragskonfiguration - Liefert alle gespeicherten Vertrags-Konfigurationen
*DSGVOVertrgeApi* | [**getGDPRContracts**](docs/Api/DSGVOVertrgeApi.md#getgdprcontracts) | **GET** /gdpr/contracts | Vertrag - Liefert alle hinterlegten Verträge
*DSGVOVertrgeApi* | [**getGDPRPDF**](docs/Api/DSGVOVertrgeApi.md#getgdprpdf) | **GET** /gdpr/pdfs/{pdfIdentifier} | PDF - Liefert ein bestimmtes Vertrags-PDF
*DSGVOVertrgeApi* | [**getGDPRPDFs**](docs/Api/DSGVOVertrgeApi.md#getgdprpdfs) | **GET** /gdpr/pdfs | PDF - Liefert die Daten der Vertrags-PDFs
*DSGVOVertrgeApi* | [**sendGDPRContractMail**](docs/Api/DSGVOVertrgeApi.md#sendgdprcontractmail) | **POST** /gdpr/contracts/{contractIdentifier}/actions/mail&#39; | Vertrag - Verschickt eine E-Mail mit PDF an den Empfänger des Vertrags
*DSGVOVertrgeApi* | [**uploadGDPRPDF**](docs/Api/DSGVOVertrgeApi.md#uploadgdprpdf) | **POST** /gdpr/pdfs | PDF - Vertrags-PDF hochladen
*DatabaseApi* | [**listDatabaseTypes**](docs/Api/DatabaseApi.md#listdatabasetypes) | **GET** /databasetypes | Datenbanktypen
*DomainsApi* | [**checkDomainAvailability**](docs/Api/DomainsApi.md#checkdomainavailability) | **POST** /domains/{domainIdentifier}/actions/check | Domainverfügbarkeit prüfen
*DomainsApi* | [**createSubdomain**](docs/Api/DomainsApi.md#createsubdomain) | **POST** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain erstellen
*DomainsApi* | [**deleteDomain**](docs/Api/DomainsApi.md#deletedomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier} | Domain löschen/kündigen
*DomainsApi* | [**deleteSubdomain**](docs/Api/DomainsApi.md#deletesubdomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain löschen
*DomainsApi* | [**domainProxyList**](docs/Api/DomainsApi.md#domainproxylist) | **GET** /accounts/{accountIdentifier}/domainsproxies | Domain Proxies eines Accounts
*DomainsApi* | [**getDomainAuthCode**](docs/Api/DomainsApi.md#getdomainauthcode) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/authcode | Auth-Code einer Domain auslesen
*DomainsApi* | [**getToplevelDomain**](docs/Api/DomainsApi.md#gettopleveldomain) | **GET** /topleveldomains/{topLevelDomainIdentifier} | Toplevel-Domain auslesen
*DomainsApi* | [**listCertificatesByAccount**](docs/Api/DomainsApi.md#listcertificatesbyaccount) | **GET** /accounts/{accountIdentifier}/certificates | Zertifikate eines Accounts auslesen
*DomainsApi* | [**listDomainsByAccount**](docs/Api/DomainsApi.md#listdomainsbyaccount) | **GET** /accounts/{accountIdentifier}/domains | Domains eines Accounts auslesen
*DomainsApi* | [**listSubdomainsByDomain**](docs/Api/DomainsApi.md#listsubdomainsbydomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomains eines Accounts auslesen
*DomainsApi* | [**listToplevelDomains**](docs/Api/DomainsApi.md#listtopleveldomains) | **GET** /topleveldomains | Toplevel-Domains auslesen
*DomainsApi* | [**registerNewCertificate**](docs/Api/DomainsApi.md#registernewcertificate) | **POST** /accounts/{accountIdentifier}/certificates | Zertifikat bestellen
*DomainsApi* | [**registerNewDomain**](docs/Api/DomainsApi.md#registernewdomain) | **POST** /accounts/{accountIdentifier}/domains | Domain registrieren/Transfer einleiten
*KndigungApi* | [**cancelContract**](docs/Api/KndigungApi.md#cancelcontract) | **POST** /cancellations | Kündigung einleiten
*KndigungApi* | [**resendCancellationConfirmation**](docs/Api/KndigungApi.md#resendcancellationconfirmation) | **POST** /cancellations/{cancellationIdentifier}/actions/confirmationmail | Kündigungsbestätigung erneut senden
*KundenApi* | [**getBenefitDetails**](docs/Api/KundenApi.md#getbenefitdetails) | **GET** /customers/{customerNumber}/benefits/{benefit} | Details zu einer gebuchten Leistung
*KundenApi* | [**getCurrentCustomer**](docs/Api/KundenApi.md#getcurrentcustomer) | **GET** /customer | Details zu dem aktuellem Kunden
*KundenApi* | [**getCustomer**](docs/Api/KundenApi.md#getcustomer) | **GET** /customers/{customerNumber} | Kundendetails auslesen
*KundenApi* | [**getCustomerBillingRecipient**](docs/Api/KundenApi.md#getcustomerbillingrecipient) | **GET** /customers/{customerNumber}/billingrecipient | Rechungsempfänger auslesen
*KundenApi* | [**getCustomerBillingSettings**](docs/Api/KundenApi.md#getcustomerbillingsettings) | **GET** /customers/{customerNumber}/billingsettings | Rechungseinstellungen auslesen
*KundenApi* | [**getCustomerContactPerson**](docs/Api/KundenApi.md#getcustomercontactperson) | **GET** /customers/{customerNumber}/contactperson | Ansprechpartner auslesen
*KundenApi* | [**getCustomerContractPartner**](docs/Api/KundenApi.md#getcustomercontractpartner) | **GET** /customers/{customerNumber}/contractpartner | Vertragspartner auslesen
*KundenApi* | [**getCustomerPaymentSettings**](docs/Api/KundenApi.md#getcustomerpaymentsettings) | **GET** /customers/{customerNumber}/paymentsettings | Zahlungseinstellungen auslesen
*KundenApi* | [**getInvoice**](docs/Api/KundenApi.md#getinvoice) | **GET** /invoices/{invoiceNumber} | Rechnung eines Kunden
*KundenApi* | [**getPaymentReceipts**](docs/Api/KundenApi.md#getpaymentreceipts) | **GET** /invoices/{invoiceNumber}/paymentreceipts | Zahlungseingänge einer Rechnung
*KundenApi* | [**listAccountsByCustomer**](docs/Api/KundenApi.md#listaccountsbycustomer) | **GET** /customers/{customerNumber}/accounts | Accounts eines Kunden
*KundenApi* | [**listInvoicesByCustomer**](docs/Api/KundenApi.md#listinvoicesbycustomer) | **GET** /customers/{customerNumber}/invoices | Rechnungen eines Kunden
*KundenApi* | [**resetCustomerBillingRecipient**](docs/Api/KundenApi.md#resetcustomerbillingrecipient) | **DELETE** /customers/{customerNumber}/billingrecipient | Rechnungsempfänger eines Kunden zurücksetzen
*KundenApi* | [**updateCustomerBillingRecipient**](docs/Api/KundenApi.md#updatecustomerbillingrecipient) | **PUT** /customers/{customerNumber}/billingrecipient | Rechnungsempfänger ändern
*KundenApi* | [**updateCustomerBillingSettings**](docs/Api/KundenApi.md#updatecustomerbillingsettings) | **PUT** /customers/{customerNumber}/billingsettings | Rechnungseinstellungen ändern
*KundenApi* | [**updateCustomerContactPerson**](docs/Api/KundenApi.md#updatecustomercontactperson) | **PUT** /customers/{customerNumber}/contactperson | Ansprechpartner ändern
*KundenApi* | [**updateCustomerContractPartner**](docs/Api/KundenApi.md#updatecustomercontractpartner) | **PUT** /customers/{customerNumber}/contractpartner | Vertragspartner ändern
*KundenApi* | [**updateCustomerPaymentSettings**](docs/Api/KundenApi.md#updatecustomerpaymentsettings) | **PUT** /customers/{customerNumber}/paymentsettings | Zahlungseinstellungen ändern
*MailadressenApi* | [**listEmailAddressesByAccount**](docs/Api/MailadressenApi.md#listemailaddressesbyaccount) | **GET** /accounts/{accountIdentifier}/mailaddresses | Mailadressen eines Accounts auslesen
*PartnerApi* | [**orderPartnerBox**](docs/Api/PartnerApi.md#orderpartnerbox) | **POST** /orders/partnerbox | Bestellung eines Partnerbox
*PartnerApi* | [**orderPartnerProgram**](docs/Api/PartnerApi.md#orderpartnerprogram) | **POST** /orders/partnerprogram | Anmeldung am Partnerprogramm
*PromotionCodeApi* | [**getPromotionCode**](docs/Api/PromotionCodeApi.md#getpromotioncode) | **GET** /promotioncodes/{promotionCode} | Promotioncode auslesen
*PromotionCodeApi* | [**verifyPromotionCode**](docs/Api/PromotionCodeApi.md#verifypromotioncode) | **POST** /promotioncodes/{promotionCode}/actions/validate | Promotioncode validieren
*ResellerApi* | [**getReseller**](docs/Api/ResellerApi.md#getreseller) | **GET** /resellers/{resellerIdentifier} | Reseller auslesen
*SoftwareApi* | [**getSoftwareInstallation**](docs/Api/SoftwareApi.md#getsoftwareinstallation) | **GET** /installations/{installationIdentifier} | Details einer Softwareinstallation auslesen
*SoftwareApi* | [**listSoftwareInstallationExtensions**](docs/Api/SoftwareApi.md#listsoftwareinstallationextensions) | **GET** /installations/{installationIdentifier}/extensions | Extensions einer Softwareinstallation auslesen
*SoftwareApi* | [**listSoftwareInstallationsByAccount**](docs/Api/SoftwareApi.md#listsoftwareinstallationsbyaccount) | **GET** /accounts/{accountIdentifier}/installations | Softwareinstallationen auslesen
*SoftwareApi* | [**listSoftwares**](docs/Api/SoftwareApi.md#listsoftwares) | **GET** /software | Unterstützte Software auslesen
*SubdomainApi* | [**createSubdomain**](docs/Api/SubdomainApi.md#createsubdomain) | **POST** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain erstellen
*SubdomainApi* | [**deleteSubdomain**](docs/Api/SubdomainApi.md#deletesubdomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain löschen
*SubdomainApi* | [**getSubdomain**](docs/Api/SubdomainApi.md#getsubdomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains/{subdomainIdentifier} | Subdomain auslesen
*SubdomainApi* | [**listSubdomainsByDomain**](docs/Api/SubdomainApi.md#listsubdomainsbydomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomains eines Accounts auslesen
*TicketsApi* | [**answerSupportTicket**](docs/Api/TicketsApi.md#answersupportticket) | **POST** /tickets/{ticketIdentifier}/answers | Ticketantwort erstellen
*TicketsApi* | [**createSupportTicket**](docs/Api/TicketsApi.md#createsupportticket) | **POST** /tickets | Neues Support-Ticket
*TicketsApi* | [**listSupportTicketAnswers**](docs/Api/TicketsApi.md#listsupportticketanswers) | **GET** /tickets/{ticketIdentifier}/answers | Ticketantworten auslesen
*TicketsApi* | [**listSupportTickets**](docs/Api/TicketsApi.md#listsupporttickets) | **GET** /customers/{customerNumber}/tickets | Support-Tickets auslesen
*VertrgeApi* | [**cancelContract**](docs/Api/VertrgeApi.md#cancelcontract) | **POST** /cancellations | Kündigung einleiten
*VertrgeApi* | [**listCancelledContractsByCustomer**](docs/Api/VertrgeApi.md#listcancelledcontractsbycustomer) | **GET** /customers/{customerNumber}/cancelledcontracts | Verträge eines Kunden, die sich aktuell im Kündigungsprozess befinden
*VertrgeApi* | [**listContractsByCustomer**](docs/Api/VertrgeApi.md#listcontractsbycustomer) | **GET** /customers/{customerNumber}/contracts | Verträge auslesen
*VertrgeApi* | [**resendCancellationConfirmation**](docs/Api/VertrgeApi.md#resendcancellationconfirmation) | **POST** /cancellations/{cancellationIdentifier}/actions/confirmationmail | Kündigungsbestätigung erneut senden
*VirtApi* | [**listGuestOperatingSystems**](docs/Api/VirtApi.md#listguestoperatingsystems) | **GET** /virt/guestoperatingsystems | Root-Server Betriebssysteme
*WarenkorbApi* | [**addDomainToCart**](docs/Api/WarenkorbApi.md#adddomaintocart) | **POST** /carts/{cartIdentifier}/domains | Warenkorb-Domainposition hinzufügen
*WarenkorbApi* | [**addItemToCart**](docs/Api/WarenkorbApi.md#additemtocart) | **POST** /carts/{cartIdentifier}/items | Warenkorb-Position hinzufügen
*WarenkorbApi* | [**checkoutOrder**](docs/Api/WarenkorbApi.md#checkoutorder) | **POST** /carts/{cartIdentifier}/actions/checkout | Bestellung abschließen
*WarenkorbApi* | [**confirmSMSVerification**](docs/Api/WarenkorbApi.md#confirmsmsverification) | **POST** /carts/{cartIdentifier}/actions/verify | SMS-Verifizierung bestätigen
*WarenkorbApi* | [**createCart**](docs/Api/WarenkorbApi.md#createcart) | **POST** /carts | Warenkorb erstellen
*WarenkorbApi* | [**createCartFromTemplate**](docs/Api/WarenkorbApi.md#createcartfromtemplate) | **POST** /carts/{cartIdentifier} | Warenkorb aus Vorlage erstellen
*WarenkorbApi* | [**createQuoteFromCart**](docs/Api/WarenkorbApi.md#createquotefromcart) | **POST** /carts/{cartIdentifier}/actions/offer | Angebot versenden
*WarenkorbApi* | [**deleteCart**](docs/Api/WarenkorbApi.md#deletecart) | **DELETE** /carts/{cartIdentifier} | Warenkorb löschen
*WarenkorbApi* | [**deleteItemFromCart**](docs/Api/WarenkorbApi.md#deleteitemfromcart) | **DELETE** /carts/{cartIdentifier}/items/{itemIdentifier} | Warenkorb-Position löschen
*WarenkorbApi* | [**getCart**](docs/Api/WarenkorbApi.md#getcart) | **GET** /carts/{cartIdentifier} | Warenkorb auslesen
*WarenkorbApi* | [**recommendCart**](docs/Api/WarenkorbApi.md#recommendcart) | **POST** /carts/{cartIdentifier}/actions/recommend | Warenkorbvorlage für Account-Ausgliederung erstellen
*WarenkorbApi* | [**requestSMSVerification**](docs/Api/WarenkorbApi.md#requestsmsverification) | **POST** /carts/{cartIdentifier}/actions/requestverification | SMS-Verifizierung starten
*WarenkorbApi* | [**shareCart**](docs/Api/WarenkorbApi.md#sharecart) | **POST** /carts/{cartIdentifier}/actions/share | Warenkorbvorlage erstellen
*WarenkorbApi* | [**updateCart**](docs/Api/WarenkorbApi.md#updatecart) | **PUT** /carts/{cartIdentifier} | Warenkorb bearbeiten
*WarenkorbApi* | [**verifyRecommendCart**](docs/Api/WarenkorbApi.md#verifyrecommendcart) | **POST** /carts/{cartIdentifier}/actions/recommendation/verify | Überprüfe PIN-Code von Empfehlung
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Registriert einen neuen Webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhookIdentifier} | Löscht einen Webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhookIdentifier} | Liefert einen bestimmten Webhook
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /webhooks | Liefert alle hinterlegten Webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhookIdentifier} | Updated den gewünschten Webhook

## Models

- [AcceptGDPRContractRequest](docs/Model/AcceptGDPRContractRequest.md)
- [Account](docs/Model/Account.md)
- [ApplicationToken](docs/Model/ApplicationToken.md)
- [ApplicationTokenInput](docs/Model/ApplicationTokenInput.md)
- [ApplicationTokenResponse](docs/Model/ApplicationTokenResponse.md)
- [Article](docs/Model/Article.md)
- [ArticleArticleOptions](docs/Model/ArticleArticleOptions.md)
- [ArticleArticleOptionsMainCategory](docs/Model/ArticleArticleOptionsMainCategory.md)
- [ArticleBenefits](docs/Model/ArticleBenefits.md)
- [ArticleBenefitsDatabase](docs/Model/ArticleBenefitsDatabase.md)
- [ArticleBenefitsDatabaseMysql](docs/Model/ArticleBenefitsDatabaseMysql.md)
- [ArticleBenefitsDnsEditor](docs/Model/ArticleBenefitsDnsEditor.md)
- [ArticleBenefitsDomain](docs/Model/ArticleBenefitsDomain.md)
- [ArticleBenefitsMailAddress](docs/Model/ArticleBenefitsMailAddress.md)
- [ArticleBenefitsMailBox](docs/Model/ArticleBenefitsMailBox.md)
- [ArticleBenefitsMailBoxSpamDefender](docs/Model/ArticleBenefitsMailBoxSpamDefender.md)
- [ArticleBenefitsServer](docs/Model/ArticleBenefitsServer.md)
- [ArticleBenefitsServerBackup](docs/Model/ArticleBenefitsServerBackup.md)
- [ArticleBenefitsServerCronJob](docs/Model/ArticleBenefitsServerCronJob.md)
- [ArticleBenefitsServerFtpUser](docs/Model/ArticleBenefitsServerFtpUser.md)
- [ArticleBenefitsServerHardware](docs/Model/ArticleBenefitsServerHardware.md)
- [ArticleBenefitsServerSsh](docs/Model/ArticleBenefitsServerSsh.md)
- [ArticleBenefitsServerSsl](docs/Model/ArticleBenefitsServerSsl.md)
- [ArticleBilling](docs/Model/ArticleBilling.md)
- [ArticleConfigurationData](docs/Model/ArticleConfigurationData.md)
- [ArticleConfigurationDataLimits](docs/Model/ArticleConfigurationDataLimits.md)
- [ArticleContract](docs/Model/ArticleContract.md)
- [ArticleContractUnit](docs/Model/ArticleContractUnit.md)
- [ArticleDescription](docs/Model/ArticleDescription.md)
- [ArticleGroup](docs/Model/ArticleGroup.md)
- [ArticleOption](docs/Model/ArticleOption.md)
- [ArticleOptionPrice](docs/Model/ArticleOptionPrice.md)
- [ArticlePrice](docs/Model/ArticlePrice.md)
- [ArticlePriceDefault](docs/Model/ArticlePriceDefault.md)
- [ArticleUpgradeOption](docs/Model/ArticleUpgradeOption.md)
- [AuthenticationRequest](docs/Model/AuthenticationRequest.md)
- [AuthenticationResponse](docs/Model/AuthenticationResponse.md)
- [BankData](docs/Model/BankData.md)
- [Benefit](docs/Model/Benefit.md)
- [BenefitBenefit](docs/Model/BenefitBenefit.md)
- [Billing](docs/Model/Billing.md)
- [Cancellation](docs/Model/Cancellation.md)
- [CancellationRequest](docs/Model/CancellationRequest.md)
- [CancellationRequestDomains](docs/Model/CancellationRequestDomains.md)
- [Cart](docs/Model/Cart.md)
- [CartItem](docs/Model/CartItem.md)
- [CartItemInput](docs/Model/CartItemInput.md)
- [Certificate](docs/Model/Certificate.md)
- [CertificateRegistration](docs/Model/CertificateRegistration.md)
- [Contact](docs/Model/Contact.md)
- [ContactUpdateRequest](docs/Model/ContactUpdateRequest.md)
- [ContactWithPhone](docs/Model/ContactWithPhone.md)
- [ContactWithPhoneAllOf](docs/Model/ContactWithPhoneAllOf.md)
- [Contract](docs/Model/Contract.md)
- [Country](docs/Model/Country.md)
- [CountryName](docs/Model/CountryName.md)
- [CreateCustomerRequest](docs/Model/CreateCustomerRequest.md)
- [CreateCustomerResponse](docs/Model/CreateCustomerResponse.md)
- [CreateGDPRContractRequest](docs/Model/CreateGDPRContractRequest.md)
- [CrossSellingOption](docs/Model/CrossSellingOption.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAccount](docs/Model/CustomerAccount.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerBillingSettings](docs/Model/CustomerBillingSettings.md)
- [CustomerCategory](docs/Model/CustomerCategory.md)
- [CustomerContactData](docs/Model/CustomerContactData.md)
- [CustomerContract](docs/Model/CustomerContract.md)
- [CustomerContractAccount](docs/Model/CustomerContractAccount.md)
- [CustomerPartner](docs/Model/CustomerPartner.md)
- [DatabaseType](docs/Model/DatabaseType.md)
- [Domain](docs/Model/Domain.md)
- [DomainAuthCode](docs/Model/DomainAuthCode.md)
- [DomainDeletionRequest](docs/Model/DomainDeletionRequest.md)
- [DomainItem](docs/Model/DomainItem.md)
- [DomainItemInput](docs/Model/DomainItemInput.md)
- [DomainNameTransfer](docs/Model/DomainNameTransfer.md)
- [DomainProxy](docs/Model/DomainProxy.md)
- [DomainProxyDomain](docs/Model/DomainProxyDomain.md)
- [DomainProxyExpireDate](docs/Model/DomainProxyExpireDate.md)
- [DomainRegistration](docs/Model/DomainRegistration.md)
- [Email](docs/Model/Email.md)
- [Error](docs/Model/Error.md)
- [FormularBody](docs/Model/FormularBody.md)
- [FormularBody1](docs/Model/FormularBody1.md)
- [FormularBody2](docs/Model/FormularBody2.md)
- [GDPRContact](docs/Model/GDPRContact.md)
- [GDPRContract](docs/Model/GDPRContract.md)
- [GDPRContractPreset](docs/Model/GDPRContractPreset.md)
- [GDPRPDF](docs/Model/GDPRPDF.md)
- [GDPRTom](docs/Model/GDPRTom.md)
- [GuestOperatingSystem](docs/Model/GuestOperatingSystem.md)
- [Handles](docs/Model/Handles.md)
- [HostingOrderCustomer](docs/Model/HostingOrderCustomer.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceAmount](docs/Model/InvoiceAmount.md)
- [InvoiceItem](docs/Model/InvoiceItem.md)
- [InvoiceItemQuantity](docs/Model/InvoiceItemQuantity.md)
- [IpAddress](docs/Model/IpAddress.md)
- [MailAck](docs/Model/MailAck.md)
- [MailAddress](docs/Model/MailAddress.md)
- [Message](docs/Model/Message.md)
- [OfferRequest](docs/Model/OfferRequest.md)
- [OfferRequestArticle](docs/Model/OfferRequestArticle.md)
- [OfferRequestArticles](docs/Model/OfferRequestArticles.md)
- [OfferRequestRecipient](docs/Model/OfferRequestRecipient.md)
- [OptionalContactWithTaxID](docs/Model/OptionalContactWithTaxID.md)
- [OptionalContactWithTaxIDAllOf](docs/Model/OptionalContactWithTaxIDAllOf.md)
- [OrderPreUpgradeCheck](docs/Model/OrderPreUpgradeCheck.md)
- [PartnerHostingOrderRequest](docs/Model/PartnerHostingOrderRequest.md)
- [PaymentReceipt](docs/Model/PaymentReceipt.md)
- [PaymentReceiptKind](docs/Model/PaymentReceiptKind.md)
- [PromotioncodeValidierungsanfrage](docs/Model/PromotioncodeValidierungsanfrage.md)
- [Recommendation](docs/Model/Recommendation.md)
- [Reseller](docs/Model/Reseller.md)
- [SendMailForGDPRContractRequest](docs/Model/SendMailForGDPRContractRequest.md)
- [ShopTestAgencyOrderRequest](docs/Model/ShopTestAgencyOrderRequest.md)
- [Software](docs/Model/Software.md)
- [SoftwareCategory](docs/Model/SoftwareCategory.md)
- [SoftwareExtension](docs/Model/SoftwareExtension.md)
- [SoftwareInstallation](docs/Model/SoftwareInstallation.md)
- [SoftwareInstallationDatabase](docs/Model/SoftwareInstallationDatabase.md)
- [SoftwareInstallationSoftware](docs/Model/SoftwareInstallationSoftware.md)
- [SoftwareInstallationVersion](docs/Model/SoftwareInstallationVersion.md)
- [Subdomain](docs/Model/Subdomain.md)
- [SubdomainCreationBody](docs/Model/SubdomainCreationBody.md)
- [TestAccountOrderRequest](docs/Model/TestAccountOrderRequest.md)
- [TestAgencyOrderRequest](docs/Model/TestAgencyOrderRequest.md)
- [TestHostingOrderCustomer](docs/Model/TestHostingOrderCustomer.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketAccount](docs/Model/TicketAccount.md)
- [TicketAnswer](docs/Model/TicketAnswer.md)
- [TicketAnswerInput](docs/Model/TicketAnswerInput.md)
- [TicketAnswerInputAuthor](docs/Model/TicketAnswerInputAuthor.md)
- [TicketAuthor](docs/Model/TicketAuthor.md)
- [TicketCustomer](docs/Model/TicketCustomer.md)
- [TicketInput](docs/Model/TicketInput.md)
- [TicketInputAccount](docs/Model/TicketInputAccount.md)
- [TicketInputAuthor](docs/Model/TicketInputAuthor.md)
- [TopLevelDomain](docs/Model/TopLevelDomain.md)
- [UpdateContact](docs/Model/UpdateContact.md)
- [UpgradeCase](docs/Model/UpgradeCase.md)
- [UploadGDPRPDFRequest](docs/Model/UploadGDPRPDFRequest.md)
- [Verifizierungsanfrage](docs/Model/Verifizierungsanfrage.md)
- [Verifizierungscode](docs/Model/Verifizierungscode.md)
- [VirtualAccount](docs/Model/VirtualAccount.md)
- [VirtualAccountInput](docs/Model/VirtualAccountInput.md)
- [VirtualAccountOutput](docs/Model/VirtualAccountOutput.md)
- [VirtualAccountOutputAllOf](docs/Model/VirtualAccountOutputAllOf.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookParameter](docs/Model/WebhookParameter.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
