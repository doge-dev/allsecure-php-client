<?php

namespace DogeDev\AllSecure\Transaction\Base;

use DogeDev\AllSecure\Schedule\ScheduleData;
use DogeDev\AllSecure\Schedule\ScheduleWithTransaction;

/**
 * Trait ScheduleTrait
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
trait ScheduleTrait {

    /**
     * @var ScheduleWithTransaction
     */
    protected $schedule;

    /**
     * ScheduleResultData for backward compatibility
     *
     * @return ScheduleData|ScheduleWithTransaction
     */
    public function getSchedule() {
        return $this->schedule;
    }

    /**
     * ScheduleResultData for backward compatibility
     *
     * @param ScheduleData|ScheduleWithTransaction $schedule
     *
     * @return $this
     */
    public function setSchedule($schedule = null) {
        $this->schedule = $schedule;

        return $this;
    }

}