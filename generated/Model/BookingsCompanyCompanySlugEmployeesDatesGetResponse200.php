<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugEmployeesDatesGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItem[]|null
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItem[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItem[]|null $data
     */
    public function setData(?array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
