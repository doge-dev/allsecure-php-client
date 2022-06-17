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
 * Capture: Charge a previously preauthorized transaction.
 *
 * @package DogeDev\AllSecure\Transaction
 */
class Capture extends AbstractTransactionWithReference implements AmountableInterface, ItemsInterface, TransactionSplitsInterface {
    use AmountableTrait;
    use ItemsTrait;
    use TransactionSplitsTrait;

    /** @var string */
    protected $description;

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
