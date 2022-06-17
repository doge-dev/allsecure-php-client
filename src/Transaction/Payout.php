<?php

namespace DogeDev\AllSecure\Transaction;

use DogeDev\AllSecure\Transaction\Base\AbstractTransactionWithReference;
use DogeDev\AllSecure\Transaction\Base\AmountableInterface;
use DogeDev\AllSecure\Transaction\Base\AmountableTrait;
use DogeDev\AllSecure\Transaction\Base\CustomerInterface;
use DogeDev\AllSecure\Transaction\Base\CustomerTrait;
use DogeDev\AllSecure\Transaction\Base\IndicatorInterface;
use DogeDev\AllSecure\Transaction\Base\ItemsInterface;
use DogeDev\AllSecure\Transaction\Base\ItemsTrait;
use DogeDev\AllSecure\Transaction\Base\TransactionSplitsInterface;
use DogeDev\AllSecure\Transaction\Base\TransactionSplitsTrait;
use DogeDev\AllSecure\Transaction\Base\OffsiteInterface;
use DogeDev\AllSecure\Transaction\Base\OffsiteTrait;
use DogeDev\AllSecure\Transaction\Base\PayByLinkTrait;
use DogeDev\AllSecure\Transaction\Base\IndicatorTrait;

/**
 * Payout: Payout a certain amount of money to the customer. (Debits the merchant's account, Credits the customer's account)
 *
 * @package DogeDev\AllSecure\Transaction
 */
class Payout extends AbstractTransactionWithReference
             implements AmountableInterface,
                        CustomerInterface,
                        ItemsInterface,
                        OffsiteInterface,
                        TransactionSplitsInterface,
                        IndicatorInterface
{

    use AmountableTrait;
    use CustomerTrait;
    use ItemsTrait;
    use TransactionSplitsTrait;
    use OffsiteTrait;
    use PayByLinkTrait;
    use IndicatorTrait;

    /** @var string */
    protected $transactionToken;

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
