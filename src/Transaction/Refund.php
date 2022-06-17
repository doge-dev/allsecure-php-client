<?php

namespace DogeDev\AllSecure\Transaction;

use DogeDev\AllSecure\Transaction\Base\AbstractTransactionWithReference;
use DogeDev\AllSecure\Transaction\Base\AmountableInterface;
use DogeDev\AllSecure\Transaction\Base\AmountableTrait;
use DogeDev\AllSecure\Transaction\Base\ItemsInterface;
use DogeDev\AllSecure\Transaction\Base\ItemsTrait;
use DogeDev\AllSecure\Transaction\Base\TransactionSplitsInterface;
use DogeDev\AllSecure\Transaction\Base\TransactionSplitsTrait;

/**
 * Refund: Refund money from a previous Debit (or Capture) transaction to the customer.
 *
 * @note Preauthorized transactions can be reverted with a Void transaction, not a Refund!
 *
 * @package DogeDev\AllSecure\Transaction
 */
class Refund extends AbstractTransactionWithReference implements AmountableInterface, ItemsInterface, TransactionSplitsInterface {
    use AmountableTrait;
    use ItemsTrait;
    use TransactionSplitsTrait;

    /** @var string */
    protected $callbackUrl;

    /** @var string */
    protected $transactionToken;

    /** @var string */
    protected $description;

    /**
     * @return string
     */
    public function getCallbackUrl() {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     */
    public function setCallbackUrl($callbackUrl) {
        $this->callbackUrl = $callbackUrl;
    }

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
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

}
