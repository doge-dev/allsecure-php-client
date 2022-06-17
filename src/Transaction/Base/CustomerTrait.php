<?php

namespace DogeDev\AllSecure\Transaction\Base;

use DogeDev\AllSecure\Data\CreditCardCustomer;
use DogeDev\AllSecure\Data\Customer;
use DogeDev\AllSecure\Data\IbanCustomer;

/**
 * Class ThreeDSecureTrait
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
trait CustomerTrait {

    /** @var Customer */
    protected $customer;

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * with backward compatibility for IbanCustomer/CreditCardCustomer
     * @param IbanCustomer|CreditCardCustomer|Customer $customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

}