<?php

namespace DogeDev\AllSecure\Transaction\Base;

use DogeDev\AllSecure\Data\TransactionSplit;

/**
 * Class ItemsTrait
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
trait TransactionSplitsTrait {

    /** @var TransactionSplit[]  */
    protected $transactionSplits = array();

    /**
     * @param TransactionSplit[] $transactionSplits
     * @return void
     */
    public function setTransactionSplits($transactionSplits) {
        $this->transactionSplits = $transactionSplits;
    }

    /**
     * @return TransactionSplit[]
     */
    public function getTransactionSplits() {
        return $this->transactionSplits;
    }

    /**
     * @param TransactionSplit $transactionSplit
     *
     * @return void
     */
    public function addTransactionSplit($transactionSplit) {
        $this->transactionSplits[] = $transactionSplit;
    }
}
