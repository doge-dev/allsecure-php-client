<?php

namespace DogeDev\AllSecure\Transaction\Base;

use DogeDev\AllSecure\Schedule\ScheduleData;
use DogeDev\AllSecure\Schedule\ScheduleWithTransaction;

interface ScheduleInterface {

    /**
     * @return ScheduleData|ScheduleWithTransaction
     */
    public function getSchedule();

    /**
     * @param ScheduleData|ScheduleWithTransaction $schedule |null
     *
     * @return $this
     */
    public function setSchedule($schedule = null);
}