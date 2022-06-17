<?php

namespace DogeDev\AllSecure\Transaction\Base;

use DogeDev\AllSecure\Data\ThreeDSecureData;

/**
 * Class ThreeDSecureTrait
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
trait ThreeDSecureTrait {

    /** @var ThreeDSecureData */
    protected $threeDSecureData;

    /**
     * @return ThreeDSecureData
     */
    public function getThreeDSecureData()
    {
        return $this->threeDSecureData;
    }

    /**
     * @param ThreeDSecureData $threeDSecureData
     *
     * @return $this
     */
    public function setThreeDSecureData($threeDSecureData)
    {
        $this->threeDSecureData = $threeDSecureData;
        return $this;
    }

}