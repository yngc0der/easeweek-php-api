<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendarConfigWorkingHoursItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var mixed[]|null
     */
    protected $n0;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return mixed[]|null
     */
    public function get0(): ?array
    {
        return $this->n0;
    }

    /**
     * @param mixed[]|null $n0
     */
    public function set0(?array $n0): self
    {
        $this->initialized['n0'] = true;
        $this->n0 = $n0;

        return $this;
    }
}
