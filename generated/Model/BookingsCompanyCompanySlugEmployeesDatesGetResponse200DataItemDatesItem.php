<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem
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
     * @var BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemTime|null
     */
    protected $time;
    /**
     * @var BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemUsersItem[]|null
     */
    protected $users;

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

    public function getTime(): ?BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemTime
    {
        return $this->time;
    }

    public function setTime(?BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemTime $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;

        return $this;
    }

    /**
     * @return BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemUsersItem[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemUsersItem[]|null $users
     */
    public function setUsers(?array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;

        return $this;
    }
}
