<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendar
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var float|null
     */
    protected $id;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendarConfig|null
     */
    protected $config;
    /**
     * @var float|null
     */
    protected $type;

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

    public function getConfig(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendarConfig
    {
        return $this->config;
    }

    public function setConfig(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendarConfig $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;

        return $this;
    }

    public function getType(): ?float
    {
        return $this->type;
    }

    public function setType(?float $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
