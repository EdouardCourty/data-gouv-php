<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Crontab
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Cron expression for day of month
     *
     * @var string
     */
    protected $dayOfMonth = '*';
    /**
     * Cron expression for day of week
     *
     * @var string
     */
    protected $dayOfWeek = '*';
    /**
     * Cron expression for hour
     *
     * @var string
     */
    protected $hour = '*';
    /**
     * Cron expression for minute
     *
     * @var string
     */
    protected $minute = '*';
    /**
     * Cron expression for month of year
     *
     * @var string
     */
    protected $monthOfYear = '*';

    /**
     * Cron expression for day of month
     */
    public function getDayOfMonth(): string
    {
        return $this->dayOfMonth;
    }

    /**
     * Cron expression for day of month
     */
    public function setDayOfMonth(string $dayOfMonth): self
    {
        $this->initialized['dayOfMonth'] = true;
        $this->dayOfMonth = $dayOfMonth;

        return $this;
    }

    /**
     * Cron expression for day of week
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }

    /**
     * Cron expression for day of week
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Cron expression for hour
     */
    public function getHour(): string
    {
        return $this->hour;
    }

    /**
     * Cron expression for hour
     */
    public function setHour(string $hour): self
    {
        $this->initialized['hour'] = true;
        $this->hour = $hour;

        return $this;
    }

    /**
     * Cron expression for minute
     */
    public function getMinute(): string
    {
        return $this->minute;
    }

    /**
     * Cron expression for minute
     */
    public function setMinute(string $minute): self
    {
        $this->initialized['minute'] = true;
        $this->minute = $minute;

        return $this;
    }

    /**
     * Cron expression for month of year
     */
    public function getMonthOfYear(): string
    {
        return $this->monthOfYear;
    }

    /**
     * Cron expression for month of year
     */
    public function setMonthOfYear(string $monthOfYear): self
    {
        $this->initialized['monthOfYear'] = true;
        $this->monthOfYear = $monthOfYear;

        return $this;
    }
}
