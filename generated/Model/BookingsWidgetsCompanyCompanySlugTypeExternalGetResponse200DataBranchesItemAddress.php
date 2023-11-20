<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddress
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
     * @var mixed|null
     */
    protected $address1;
    /**
     * @var string|null
     */
    protected $city;
    /**
     * @var mixed|null
     */
    protected $postalCode;
    /**
     * @var mixed|null
     */
    protected $apt;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPosition|null
     */
    protected $position;

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

    public function getAddress1()
    {
        return $this->address1;
    }

    public function setAddress1($address1): self
    {
        $this->initialized['address1'] = true;
        $this->address1 = $address1;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getApt()
    {
        return $this->apt;
    }

    public function setApt($apt): self
    {
        $this->initialized['apt'] = true;
        $this->apt = $apt;

        return $this;
    }

    public function getPosition(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPosition
    {
        return $this->position;
    }

    public function setPosition(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPosition $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }
}
