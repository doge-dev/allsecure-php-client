<?php

namespace DogeDev\AllSecure\Transaction\Base;

use DogeDev\AllSecure\Schedule\ScheduleData;

/**
 * Trait ScheduleTrait
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
trait ScheduleTrait {

    /**
     * @var ScheduleData
     */
    protected $schedule;

    /**
     * @return ScheduleData|null
     */
    public function getSchedule() {
        return $this->schedule;
    }

    /**
     * @param ScheduleData|null $schedule
     *
     * @return $this
     */
    public function setSchedule(ScheduleData $schedule = null) {
        $this->schedule = $schedule;

        return $this;
    }

}