<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugCalendarsGetResponse200DataDaysItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $date;
    /**
     * @var BookingsCompanyCompanySlugCalendarsGetResponse200DataDaysItemSpotsItem[]|null
     */
    protected $spots;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * @return BookingsCompanyCompanySlugCalendarsGetResponse200DataDaysItemSpotsItem[]|null
     */
    public function getSpots(): ?array
    {
        return $this->spots;
    }

    /**
     * @param BookingsCompanyCompanySlugCalendarsGetResponse200DataDaysItemSpotsItem[]|null $spots
     */
    public function setSpots(?array $spots): self
    {
        $this->initialized['spots'] = true;
        $this->spots = $spots;

        return $this;
    }
}
