<?php

namespace DogeDev\AllSecure\CustomerProfile\PaymentData;

/**
 * Class WalletData
 *
 * @package DogeDev\AllSecure\CustomerProfile\PaymentData
 *
 * @property string $walletReferenceId
 * @property string $walletOwner
 * @property string $walletType
 */
class WalletData extends PaymentData {

    const TYPE_PAYPAL = 'paypal';

}