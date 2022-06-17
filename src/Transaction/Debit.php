<?php

namespace DogeDev\AllSecure\Transaction;

use DogeDev\AllSecure\Transaction\Base\AbstractTransactionWithReference;
use DogeDev\AllSecure\Transaction\Base\AddToCustomerProfileInterface;
use DogeDev\AllSecure\Transaction\Base\AddToCustomerProfileTrait;
use DogeDev\AllSecure\Transaction\Base\AmountableInterface;
use DogeDev\AllSecure\Transaction\Base\AmountableTrait;
use DogeDev\AllSecure\Transaction\Base\CustomerInterface;
use DogeDev\AllSecure\Transaction\Base\CustomerTrait;
use DogeDev\AllSecure\Transaction\Base\IndicatorInterface;
use DogeDev\AllSecure\Transaction\Base\IndicatorTrait;
use DogeDev\AllSecure\Transaction\Base\ItemsInterface;
use DogeDev\AllSecure\Transaction\Base\ItemsTrait;
use DogeDev\AllSecure\Transaction\Base\OffsiteInterface;
use DogeDev\AllSecure\Transaction\Base\OffsiteTrait;
use DogeDev\AllSecure\Transaction\Base\PayByLinkTrait;
use DogeDev\AllSecure\Transaction\Base\ScheduleInterface;
use DogeDev\AllSecure\Transaction\Base\ScheduleTrait;
use DogeDev\AllSecure\Transaction\Base\TransactionSplitsInterface;
use DogeDev\AllSecure\Transaction\Base\TransactionSplitsTrait;
use DogeDev\AllSecure\Transaction\Base\ThreeDSecureInterface;
use DogeDev\AllSecure\Transaction\Base\ThreeDSecureTrait;

/**
 * Debit: Charge the customer for a certain amount of money. This could be once, but also recurring.
 *
 * @package DogeDev\AllSecure\Transaction
 */
class Debit extends AbstractTransactionWithReference
            implements AddToCustomerProfileInterface,
                       AmountableInterface,
                       CustomerInterface,
                       ItemsInterface,
                       TransactionSplitsInterface,
                       OffsiteInterface,
                       ScheduleInterface,
                       ThreeDSecureInterface,
                       IndicatorInterface
{

    use AddToCustomerProfileTrait;
    use AmountableTrait;
    use CustomerTrait;
    use ItemsTrait;
    use TransactionSplitsTrait;
    use OffsiteTrait;
    use ScheduleTrait;
    use ThreeDSecureTrait;
    use PayByLinkTrait;
    use IndicatorTrait;

    const TRANSACTION_INDICATOR_SINGLE = 'SINGLE';
    const TRANSACTION_INDICATOR_INITIAL = 'INITIAL';
    const TRANSACTION_INDICATOR_RECURRING = 'RECURRING';
    const TRANSACTION_INDICATOR_CARDONFILE = 'CARDONFILE';
    const TRANSACTION_INDICATOR_CARDONFILE_MERCHANT = 'CARDONFILE_MERCHANT';

    /** @var string */
    protected $transactionToken;

    /** @var bool */
    protected $withRegister = false;

    /** @var string */
    protected $language;

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
        return $this;
    }

    /**
     * @return boolean
     */
    public function isWithRegister() {
        return $this->withRegister;
    }

    /**
     * set true if you want to register a user vault together with the debit
     *
     * @param boolean $withRegister
     *
     * @return $this
     */
    public function setWithRegister($withRegister) {
        $this->withRegister = $withRegister;
        return $this;
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
        return $this;
    }
}
