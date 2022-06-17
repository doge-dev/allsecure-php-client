<?php

namespace DogeDev\AllSecure\Transaction;

use DogeDev\AllSecure\Transaction\Base\AbstractTransactionWithReference;
use DogeDev\AllSecure\Transaction\Base\AmountableTrait;

/**
 * Void: Revert a previously preauthorized transaction.
 *
 * @package DogeDev\AllSecure\Transaction
 */
class VoidTransaction extends AbstractTransactionWithReference {
    use AmountableTrait;

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
