<?php

namespace DogeDev\AllSecure\Transaction;

use DogeDev\AllSecure\Transaction\Base\AbstractTransactionWithReference;
use DogeDev\AllSecure\Transaction\Base\AmountableInterface;
use DogeDev\AllSecure\Transaction\Base\AmountableTrait;
use DogeDev\AllSecure\Transaction\Base\IndicatorInterface;
use DogeDev\AllSecure\Transaction\Base\IndicatorTrait;
use DogeDev\AllSecure\Transaction\Base\ItemsInterface;
use DogeDev\AllSecure\Transaction\Base\ItemsTrait;
use DogeDev\AllSecure\Transaction\Base\OffsiteInterface;
use DogeDev\AllSecure\Transaction\Base\OffsiteTrait;

/**
 * Class Preauthorize
 * @package ExchangeV2\Transaction
 */
class IncrementalAuthorization extends AbstractTransactionWithReference implements AmountableInterface, OffsiteInterface, ItemsInterface, IndicatorInterface {
    use OffsiteTrait;
    use AmountableTrait;
    use ItemsTrait;
    use IndicatorTrait;

    /**
     * @return string
     */
    public function getTransactionMethod() {
        return self::TRANSACTION_METHOD_INCREMENTAL_AUTHORIZATION;
    }
}
