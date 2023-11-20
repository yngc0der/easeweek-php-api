<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem
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
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $slug;
    /**
     * @var mixed|null
     */
    protected $showServiceEndTime;
    /**
     * @var bool|null
     */
    protected $isCopyrighted;
    /**
     * @var bool|null
     */
    protected $isCompanyRating;
    /**
     * @var bool|null
     */
    protected $isUserRating;
    /**
     * @var string|null
     */
    protected $country;
    /**
     * @var mixed[]|null
     */
    protected $images;
    /**
     * Branch address.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddress|null
     */
    protected $address;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile|null
     */
    protected $profile;
    /**
     * @var string|null
     */
    protected $about;
    /**
     * @var bool|null
     */
    protected $public;
    /**
     * @var bool|null
     */
    protected $isAddressHidden;
    /**
     * @var float|null
     */
    protected $duration;
    /**
     * @var string|null
     */
    protected $timezone;
    /**
     * @var mixed[]|null
     */
    protected $workingDays;
    /**
     * @var mixed[]|null
     */
    protected $workingDates;
    /**
     * @var mixed[]|null
     */
    protected $workingHours;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProductsItem[]|null
     */
    protected $products;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendar|null
     */
    protected $calendar;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemSchedule|null
     */
    protected $schedule;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    public function getShowServiceEndTime()
    {
        return $this->showServiceEndTime;
    }

    public function setShowServiceEndTime($showServiceEndTime): self
    {
        $this->initialized['showServiceEndTime'] = true;
        $this->showServiceEndTime = $showServiceEndTime;

        return $this;
    }

    public function getIsCopyrighted(): ?bool
    {
        return $this->isCopyrighted;
    }

    public function setIsCopyrighted(?bool $isCopyrighted): self
    {
        $this->initialized['isCopyrighted'] = true;
        $this->isCopyrighted = $isCopyrighted;

        return $this;
    }

    public function getIsCompanyRating(): ?bool
    {
        return $this->isCompanyRating;
    }

    public function setIsCompanyRating(?bool $isCompanyRating): self
    {
        $this->initialized['isCompanyRating'] = true;
        $this->isCompanyRating = $isCompanyRating;

        return $this;
    }

    public function getIsUserRating(): ?bool
    {
        return $this->isUserRating;
    }

    public function setIsUserRating(?bool $isUserRating): self
    {
        $this->initialized['isUserRating'] = true;
        $this->isUserRating = $isUserRating;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param mixed[]|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * Branch address.
     */
    public function getAddress(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddress
    {
        return $this->address;
    }

    /**
     * Branch address.
     */
    public function setAddress(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    public function getProfile(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile
    {
        return $this->profile;
    }

    public function setProfile(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile $profile): self
    {
        $this->initialized['profile'] = true;
        $this->profile = $profile;

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(?string $about): self
    {
        $this->initialized['about'] = true;
        $this->about = $about;

        return $this;
    }

    public function getPublic(): ?bool
    {
        return $this->public;
    }

    public function setPublic(?bool $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;

        return $this;
    }

    public function getIsAddressHidden(): ?bool
    {
        return $this->isAddressHidden;
    }

    public function setIsAddressHidden(?bool $isAddressHidden): self
    {
        $this->initialized['isAddressHidden'] = true;
        $this->isAddressHidden = $isAddressHidden;

        return $this;
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getWorkingDays(): ?array
    {
        return $this->workingDays;
    }

    /**
     * @param mixed[]|null $workingDays
     */
    public function setWorkingDays(?array $workingDays): self
    {
        $this->initialized['workingDays'] = true;
        $this->workingDays = $workingDays;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getWorkingDates(): ?array
    {
        return $this->workingDates;
    }

    /**
     * @param mixed[]|null $workingDates
     */
    public function setWorkingDates(?array $workingDates): self
    {
        $this->initialized['workingDates'] = true;
        $this->workingDates = $workingDates;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getWorkingHours(): ?array
    {
        return $this->workingHours;
    }

    /**
     * @param mixed[]|null $workingHours
     */
    public function setWorkingHours(?array $workingHours): self
    {
        $this->initialized['workingHours'] = true;
        $this->workingHours = $workingHours;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProductsItem[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProductsItem[]|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }

    public function getCalendar(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendar
    {
        return $this->calendar;
    }

    public function setCalendar(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendar $calendar): self
    {
        $this->initialized['calendar'] = true;
        $this->calendar = $calendar;

        return $this;
    }

    public function getSchedule(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemSchedule
    {
        return $this->schedule;
    }

    public function setSchedule(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemSchedule $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;

        return $this;
    }
}
