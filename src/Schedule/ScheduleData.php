<?php

namespace DogeDev\AllSecure\Schedule;

use DogeDev\AllSecure\Transaction\Base\AmountableInterface;

/**
 * Class Schedule
 *
 * @package DogeDev\AllSecure\Data
 */
class ScheduleData implements AmountableInterface {

    const PERIOD_UNIT_DAY = 'DAY';
    const PERIOD_UNIT_WEEK = 'WEEK';
    const PERIOD_UNIT_MONTH = 'MONTH';
    const PERIOD_UNIT_YEAR = 'YEAR';

    /**
     * referenceId or UUID from the register
     *
     * @var string
     */
    protected $registrationId;

    /**
     * @var string
     */
    protected $scheduleId;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var null|\DateTime
     */
    protected $startDateTime;

    /**
     * @var null|\DateTime
     */
    protected $continueDateTime;

    /**
     * @var int
     */
    protected $periodLength;

    /**
     * @var string
     */
    protected $periodUnit;

     /**
     * @var string
     */
    protected $merchantMetaData;
	
	/**
     * @return string[]
     */
    public static function getValidPeriodUnits() {
        return [
            self::PERIOD_UNIT_DAY,
            self::PERIOD_UNIT_WEEK,
            self::PERIOD_UNIT_MONTH,
            self::PERIOD_UNIT_YEAR
        ];
    }

    /**
     * @return string
     */
    public function getScheduleId() {
        return $this->scheduleId;
    }

    /**
     * @param string $scheduleId
     *
     * @return ScheduleData
     */
    public function setScheduleId($scheduleId) {
        $this->scheduleId = $scheduleId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationId() {
        return $this->registrationId;
    }

    /**
     * @param string $registrationId
     *
     * @return ScheduleData
     */
    public function setRegistrationId($registrationId) {
        $this->registrationId = $registrationId;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return ScheduleData
     */
    public function setAmount($amount) {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return ScheduleData
     */
    public function setCurrency($currency) {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return null|\DateTime
     */
    public function getStartDateTime() {
        return $this->startDateTime;
    }

    /**
     * @param null|\DateTime
     *
     * @return ScheduleData
     */
    public function setStartDateTime($startDateTime) {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return null|\DateTime
     */
    public function getContinueDateTime() {
        return $this->continueDateTime;
    }

    /**
     * @param null|\DateTime
     *
     * @return ScheduleData
     */
    public function setContinueDateTime($continueDateTime) {
        $this->continueDateTime = $continueDateTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getPeriodLength() {
        return $this->periodLength;
    }

    /**
     * @param int $periodLength
     *
     * @return ScheduleData
     */
    public function setPeriodLength($periodLength) {
        $this->periodLength = $periodLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getPeriodUnit() {
        return $this->periodUnit;
    }

    /**
     * @param string $periodUnit
     *
     * @return ScheduleData
     */
    public function setPeriodUnit($periodUnit) {
        $this->periodUnit = $periodUnit;

        return $this;
    }
	
	/**
     * @return string
     */
    public function getMerchantMetaData() {
        return $this->merchantMetaData;
    }

    /**
     * @param string $merchantMetaData
     * @return ScheduleData
     */
    public function setMerchantMetaData($merchantMetaData) {
        $this->merchantMetaData = $merchantMetaData;
        return $this;
    }
	
	
}