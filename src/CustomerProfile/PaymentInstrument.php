<?php

namespace DogeDev\AllSecure\CustomerProfile;

use DogeDev\AllSecure\CustomerProfile\PaymentData\PaymentData;
use DogeDev\AllSecure\Json\DataObject;

/**
 * Class PaymentInstrument
 *
 * @package DogeDev\AllSecure\CustomerProfile
 *
 * @property string $method
 * @property string $paymentToken
 * @property \DateTime $createdAt
 * @property PaymentData $paymentData
 * @property bool $isPreferred
 */
class PaymentInstrument extends DataObject {

    const METHOD_CARD = 'card';
    const METHOD_IBAN = 'iban';
    const METHOD_WALLET = 'wallet';


    /**
     * @param \DateTime $createdAt
     * @return PaymentInstrument
     */
    public function setCreatedAt($createdAt) {
        if (is_string($createdAt) && $createdAt) {
            $createdAt = new \DateTime($createdAt);
        }
        $this->createdAt = $createdAt;
        return $this;
    }


}