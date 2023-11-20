<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugCalendarsGetResponse200Data
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $today;
    /**
     * @var string|null
     */
    protected $format;
    /**
     * @var string|null
     */
    protected $availabilityTimezone;
    /**
     * @var BookingsCompanyCompanySlugCalendarsGetResponse200DataDaysItem[]|null
     */
    protected $days;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getToday(): ?string
    {
        return $this->today;
    }

    public function setToday(?string $today): self
    {
        $this->initialized['today'] = true;
        $this->today = $today;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;

        return $this;
    }

    public function getAvailabilityTimezone(): ?string
    {
        return $this->availabilityTimezone;
    }

    public function setAvailabilityTimezone(?string $availabilityTimezone): self
    {
        $this->initialized['availabilityTimezone'] = true;
        $this->availabilityTimezone = $availabilityTimezone;

        return $this;
    }

    /**
     * @return BookingsCompanyCompanySlugCalendarsGetResponse200DataDaysItem[]|null
     */
    public function getDays(): ?array
    {
        return $this->days;
    }

    /**
     * @param BookingsCompanyCompanySlugCalendarsGetResponse200DataDaysItem[]|null $days
     */
    public function setDays(?array $days): self
    {
        $this->initialized['days'] = true;
        $this->days = $days;

        return $this;
    }
}
