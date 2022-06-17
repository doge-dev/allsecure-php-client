<?php

namespace DogeDev\AllSecure\Transaction\Base;
use DogeDev\AllSecure\Data\ThreeDSecureData;

/**
 * Interface ThreeDSecureInterface
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
interface ThreeDSecureInterface {

    /**
     * @return ThreeDSecureData
     */
    public function getThreeDSecureData();

    /**
     * @param ThreeDSecureData $threeDSecureData
     *
     * @return mixed
     */
    public function setThreeDSecureData($threeDSecureData);

}