<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemUsersItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var float|null
     */
    protected $id;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?float
    {
        return $this->id;
    }

    public function setId(?float $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
