<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Unique company id.
     *
     * @var float|null
     */
    protected $id;
    /**
     * Company name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Company unique slug.
     *
     * @var string|null
     */
    protected $slug;
    /**
     * @var bool|null
     */
    protected $showServiceEndTime;
    /**
     * @var bool|null
     */
    protected $isCopyrighted;
    /**
     * Show company rating.
     *
     * @var bool|null
     */
    protected $isCompanyRating;
    /**
     * Show employee rating.
     *
     * @var bool|null
     */
    protected $isUserRating;
    /**
     * Company country ISO code.
     *
     * @var string|null
     */
    protected $country;
    /**
     * Company branches and services images.
     *
     * @var mixed[]|null
     */
    protected $images;
    /**
     * Parent company profile.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyProfile|null
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
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendar|null
     */
    protected $calendar;
    /**
     * Company employees.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyUsersItem[]|null
     */
    protected $users;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Unique company id.
     */
    public function getId(): ?float
    {
        return $this->id;
    }

    /**
     * Unique company id.
     */
    public function setId(?float $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Company name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Company name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Company unique slug.
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * Company unique slug.
     */
    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    public function getShowServiceEndTime(): ?bool
    {
        return $this->showServiceEndTime;
    }

    public function setShowServiceEndTime(?bool $showServiceEndTime): self
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

    /**
     * Show company rating.
     */
    public function getIsCompanyRating(): ?bool
    {
        return $this->isCompanyRating;
    }

    /**
     * Show company rating.
     */
    public function setIsCompanyRating(?bool $isCompanyRating): self
    {
        $this->initialized['isCompanyRating'] = true;
        $this->isCompanyRating = $isCompanyRating;

        return $this;
    }

    /**
     * Show employee rating.
     */
    public function getIsUserRating(): ?bool
    {
        return $this->isUserRating;
    }

    /**
     * Show employee rating.
     */
    public function setIsUserRating(?bool $isUserRating): self
    {
        $this->initialized['isUserRating'] = true;
        $this->isUserRating = $isUserRating;

        return $this;
    }

    /**
     * Company country ISO code.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Company country ISO code.
     */
    public function setCountry(?string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }

    /**
     * Company branches and services images.
     *
     * @return mixed[]|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * Company branches and services images.
     *
     * @param mixed[]|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * Parent company profile.
     */
    public function getProfile(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyProfile
    {
        return $this->profile;
    }

    /**
     * Parent company profile.
     */
    public function setProfile(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyProfile $profile): self
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

    public function getCalendar(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendar
    {
        return $this->calendar;
    }

    public function setCalendar(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendar $calendar): self
    {
        $this->initialized['calendar'] = true;
        $this->calendar = $calendar;

        return $this;
    }

    /**
     * Company employees.
     *
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyUsersItem[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * Company employees.
     *
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyUsersItem[]|null $users
     */
    public function setUsers(?array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;

        return $this;
    }
}
