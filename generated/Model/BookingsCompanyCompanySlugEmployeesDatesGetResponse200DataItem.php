<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var float|null
     */
    protected $branchId;
    /**
     * @var BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem[]|null
     */
    protected $dates;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getBranchId(): ?float
    {
        return $this->branchId;
    }

    public function setBranchId(?float $branchId): self
    {
        $this->initialized['branchId'] = true;
        $this->branchId = $branchId;

        return $this;
    }

    /**
     * @return BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem[]|null
     */
    public function getDates(): ?array
    {
        return $this->dates;
    }

    /**
     * @param BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem[]|null $dates
     */
    public function setDates(?array $dates): self
    {
        $this->initialized['dates'] = true;
        $this->dates = $dates;

        return $this;
    }
}
