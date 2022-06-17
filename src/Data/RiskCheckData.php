<?php

namespace DogeDev\AllSecure\Data;

use DogeDev\AllSecure\Json\DataObject;

/**
 * Class RiskCheckData
 *
 *
 * @property string riskCheckResult
 * @property int riskScore
 * @property boolean threeDSecureRequired
 *
 *
 * @package DogeDev\AllSecure\Data
 */
class RiskCheckData extends DataObject {

    /**
     * @return string
     */
    public function getRiskCheckResult() {
        return $this->riskCheckResult;
    }

    /**
     * @param string $riskCheckResult
     */
    public function setRiskCheckResult($riskCheckResult) {
        $this->riskCheckResult = $riskCheckResult;
    }

    /**
     * @return int
     */
    public function getRiskScore() {
        return $this->riskScore;
    }

    /**
     * @param int $riskScore
     */
    public function setRiskScore($riskScore) {
        $this->riskScore = $riskScore;
    }

    /**
     * @return bool
     */
    public function getThreeDSecureRequired() {
        return $this->threeDSecureRequired;
    }

    /**
     * @param bool $threeDSecureRequired
     */
    public function setThreeDSecureRequired($threeDSecureRequired) {
        $this->threeDSecureRequired = $threeDSecureRequired;
    }




}