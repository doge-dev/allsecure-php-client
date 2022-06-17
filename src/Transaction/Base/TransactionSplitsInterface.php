<?php

namespace DogeDev\AllSecure\Transaction\Base;
use DogeDev\AllSecure\Data\TransactionSplit;

/**
 * Interface SplitsInterface
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
interface TransactionSplitsInterface {

    /**
     * @param TransactionSplit[] $transactionSplits
     * @return void
     */
    public function setTransactionSplits($transactionSplits);

    /**
     * @return TransactionSplit[]
     */
    public function getTransactionSplits();

    /**
     * @param TransactionSplit $transactionSplit
     * @return void
     */
    public function addTransactionSplit(TransactionSplit $transactionSplit);

}
