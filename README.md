Exchange Client
==============

[![Packagist](https://img.shields.io/packagist/v/allsecure-pay/php-exchange.svg)](https://packagist.org/packages/allsecure-pay/php-exchange)
[![PHP Version](https://img.shields.io/packagist/php-v/allsecure-pay/php-exchange.svg)](https://packagist.org/packages/allsecure-pay/php-exchange)
[![License](https://img.shields.io/github/license/allsecure-pay/php-exchange.svg)](LICENSE)

## API Documentation:

Learn more about AllSecure Exchange platform by reading our <a href="https://asxgw.com/documentation/gateway">documentation</a>.

## Installation via composer:

```sh
composer require doge-dev/all-secure-php-client
```
Refer to <a href="https://github.com/composer/composer/blob/master/doc/00-intro.md#introduction" alt="_new">Composer Documentation</a> if you are not familiar with composer).

## Usage with test parameters:

PHP client is made having in mind the LIVE environment. If you are to test 
on a Sandbox environment, you should ammend the client as follows:

- src/Client.php to comment-out line 46 and uncomment line 47
- src/Client.php to comment-out line 70 and uncomment line 71
- src/Xml/Generator.php to comment-out line 43 and uncomment line 44


## Usage:

```php
<?php

use DogeDev\AllSecure\Client;
use DogeDev\AllSecure\Data\Customer;
use DogeDev\AllSecure\Transaction\Debit;
use DogeDev\AllSecure\Transaction\Result;

// Include the autoloader (if not already done via Composer autoloader)
require_once('path/to/initClientAutoload.php');

// Instantiate the "Exchange\Client\Client" with your credentials
$client = new Client("username", "password", "apiKey", "sharedSecret");

$customer = new Customer();
$customer->setBillingCountry("AT")
	->setEmail("customer@email.test");

$debit = new Debit();

// define your transaction ID: e.g. 'myId-'.date('Y-m-d').'-'.uniqid()
$merchantTransactionId = 'your_transaction_id'; // must be unique

$debit->setTransactionId($merchantTransactionId)
	->setSuccessUrl($redirectUrl)
	->setCancelUrl($redirectUrl)
	->setCallbackUrl($callbackUrl)
	->setAmount(10.00)
	->setCurrency('EUR')
	->setCustomer($customer);

// send the transaction
$result = $client->debit($debit);

// now handle the result
if ($result->isSuccess()) {
	//act depending on $result->getReturnType()
	
    $gatewayReferenceId = $result->getReferenceId(); //store it in your database
    
    if ($result->getReturnType() == Result::RETURN_TYPE_ERROR) {
        //error handling
        $errors = $result->getErrors();
        //cancelCart();
    
    } elseif ($result->getReturnType() == Result::RETURN_TYPE_REDIRECT) {
        //redirect the user
        header('Location: '.$result->getRedirectUrl());
        die;
        
    } elseif ($result->getReturnType() == Result::RETURN_TYPE_PENDING) {
        //payment is pending, wait for callback to complete
    
        //setCartToPending();
    
    } elseif ($result->getReturnType() == Result::RETURN_TYPE_FINISHED) {
        //payment is finished, update your cart/payment transaction
    
        //finishCart();
    }
}
```
## Status Request:

```php
<?php

use DogeDev\AllSecure\Client;
use DogeDev\AllSecure\StatusApi\StatusRequestData;

$username = 'Your Username';
$password = 'Your password';
$apiKey = 'Connector API Key';
$sharedSecret = 'Connector Shared Secret';

require_once __DIR__ . '/vendor/autoload.php';

$client = new Client($username, $password, $apiKey, $sharedSecret);

$statusRequestData = new StatusRequestData();

// use either the UUID or your merchantTransactionId but not both
//$statusRequestData->setTransactionUuid($transactionUuid);
$statusRequestData->setMerchantTransactionId($merchantTransactionId);

$statusResult = $client->sendStatusRequest($statusRequestData);

// dump all data 
var_dump($statusResult);

// dump card data
$cardData = $statusResult->getreturnData();
var_dump($cardData);

// dump & echo error data
$errorData = $statusResult->getFirstError();

echo $errorData->getMessage();
echo $errorData->getCode();
echo $errorData->getAdapterCode();
echo $errorData->getAdapterMessage();
