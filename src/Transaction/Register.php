<?php

namespace DogeDev\AllSecure\Transaction;

use DogeDev\AllSecure\Transaction\Base\AbstractTransaction;
use DogeDev\AllSecure\Transaction\Base\AddToCustomerProfileInterface;
use DogeDev\AllSecure\Transaction\Base\AddToCustomerProfileTrait;
use DogeDev\AllSecure\Transaction\Base\CustomerInterface;
use DogeDev\AllSecure\Transaction\Base\CustomerTrait;
use DogeDev\AllSecure\Transaction\Base\IndicatorInterface;
use DogeDev\AllSecure\Transaction\Base\IndicatorTrait;
use DogeDev\AllSecure\Transaction\Base\OffsiteInterface;
use DogeDev\AllSecure\Transaction\Base\OffsiteTrait;
use DogeDev\AllSecure\Transaction\Base\PayByLinkTrait;
use DogeDev\AllSecure\Transaction\Base\ScheduleInterface;
use DogeDev\AllSecure\Transaction\Base\ScheduleTrait;
use DogeDev\AllSecure\Transaction\Base\ThreeDSecureInterface;
use DogeDev\AllSecure\Transaction\Base\ThreeDSecureTrait;

/**
 * Register: Register the customer's payment data for recurring charges.
 *
 * The registered customer payment data will be available for recurring transaction without user interaction.
 *
 * @package DogeDev\AllSecure\Transaction
 */
class Register extends AbstractTransaction
               implements AddToCustomerProfileInterface,
                          CustomerInterface,
                          OffsiteInterface,
                          ScheduleInterface,
                          ThreeDSecureInterface,
                          IndicatorInterface
{

    use AddToCustomerProfileTrait;
    use CustomerTrait;
    use OffsiteTrait;
    use ScheduleTrait;
    use ThreeDSecureTrait;
    use PayByLinkTrait;
    use IndicatorTrait;

    /** @var string */
    protected $language;

    /** @var string */
    protected $transactionToken;

    /**
     * @var string
     */
    protected $transactionIndicator;

    /**
     * @return string
     */
    public function getTransactionToken()
    {
        return $this->transactionToken;
    }

    /**
     * @param string $transactionToken
     */
    public function setTransactionToken($transactionToken)
    {
        $this->transactionToken = $transactionToken;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }
}
