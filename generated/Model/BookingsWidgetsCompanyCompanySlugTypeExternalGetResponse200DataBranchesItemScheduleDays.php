<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDays
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysFriItem[]|null
     */
    protected $fri;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysMonItem[]|null
     */
    protected $mon;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysSatItem[]|null
     */
    protected $sat;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysSunItem[]|null
     */
    protected $sun;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysThuItem[]|null
     */
    protected $thu;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysTueItem[]|null
     */
    protected $tue;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysWedItem[]|null
     */
    protected $wed;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysFriItem[]|null
     */
    public function getFri(): ?array
    {
        return $this->fri;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysFriItem[]|null $fri
     */
    public function setFri(?array $fri): self
    {
        $this->initialized['fri'] = true;
        $this->fri = $fri;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysMonItem[]|null
     */
    public function getMon(): ?array
    {
        return $this->mon;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysMonItem[]|null $mon
     */
    public function setMon(?array $mon): self
    {
        $this->initialized['mon'] = true;
        $this->mon = $mon;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysSatItem[]|null
     */
    public function getSat(): ?array
    {
        return $this->sat;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysSatItem[]|null $sat
     */
    public function setSat(?array $sat): self
    {
        $this->initialized['sat'] = true;
        $this->sat = $sat;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysSunItem[]|null
     */
    public function getSun(): ?array
    {
        return $this->sun;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysSunItem[]|null $sun
     */
    public function setSun(?array $sun): self
    {
        $this->initialized['sun'] = true;
        $this->sun = $sun;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysThuItem[]|null
     */
    public function getThu(): ?array
    {
        return $this->thu;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysThuItem[]|null $thu
     */
    public function setThu(?array $thu): self
    {
        $this->initialized['thu'] = true;
        $this->thu = $thu;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysTueItem[]|null
     */
    public function getTue(): ?array
    {
        return $this->tue;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysTueItem[]|null $tue
     */
    public function setTue(?array $tue): self
    {
        $this->initialized['tue'] = true;
        $this->tue = $tue;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysWedItem[]|null
     */
    public function getWed(): ?array
    {
        return $this->wed;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysWedItem[]|null $wed
     */
    public function setWed(?array $wed): self
    {
        $this->initialized['wed'] = true;
        $this->wed = $wed;

        return $this;
    }
}
