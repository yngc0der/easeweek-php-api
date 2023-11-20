<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendarConfig
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var float|null
     */
    protected $duration;
    /**
     * @var string|null
     */
    protected $timezone;
    /**
     * @var mixed[]|null
     */
    protected $workingDays;
    /**
     * @var mixed[]|null
     */
    protected $workingDates;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendarConfigWorkingHoursItem[]|null
     */
    protected $workingHours;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getWorkingDays(): ?array
    {
        return $this->workingDays;
    }

    /**
     * @param mixed[]|null $workingDays
     */
    public function setWorkingDays(?array $workingDays): self
    {
        $this->initialized['workingDays'] = true;
        $this->workingDays = $workingDays;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getWorkingDates(): ?array
    {
        return $this->workingDates;
    }

    /**
     * @param mixed[]|null $workingDates
     */
    public function setWorkingDates(?array $workingDates): self
    {
        $this->initialized['workingDates'] = true;
        $this->workingDates = $workingDates;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendarConfigWorkingHoursItem[]|null
     */
    public function getWorkingHours(): ?array
    {
        return $this->workingHours;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendarConfigWorkingHoursItem[]|null $workingHours
     */
    public function setWorkingHours(?array $workingHours): self
    {
        $this->initialized['workingHours'] = true;
        $this->workingHours = $workingHours;

        return $this;
    }
}
