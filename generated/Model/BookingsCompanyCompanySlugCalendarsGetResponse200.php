<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugCalendarsGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BookingsCompanyCompanySlugCalendarsGetResponse200Data|null
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getData(): ?BookingsCompanyCompanySlugCalendarsGetResponse200Data
    {
        return $this->data;
    }

    public function setData(?BookingsCompanyCompanySlugCalendarsGetResponse200Data $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
