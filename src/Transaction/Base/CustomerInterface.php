<?php

namespace DogeDev\AllSecure\Transaction\Base;
use DogeDev\AllSecure\Data\Customer;

/**
 * Interface CustomerInterface
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
interface CustomerInterface {

    /**
     * @return Customer
     */
    public function getCustomer();

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer);

}