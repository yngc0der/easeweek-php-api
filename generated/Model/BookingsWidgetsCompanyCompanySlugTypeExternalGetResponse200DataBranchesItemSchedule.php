<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemSchedule
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDays|null
     */
    protected $days;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getDays(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDays
    {
        return $this->days;
    }

    public function setDays(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDays $days): self
    {
        $this->initialized['days'] = true;
        $this->days = $days;

        return $this;
    }
}
