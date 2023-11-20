<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugBookPostBody
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Employee id.
     *
     * @var float|null
     */
    protected $userId;
    /**
     * Booked date.
     *
     * @var \DateTime|null
     */
    protected $reservedOn;
    /**
     * Company branch date booked in.
     *
     * @var float|null
     */
    protected $branchId;
    /**
     * Booked service id.
     *
     * @var float|null
     */
    protected $productId;
    /**
     * Booked related services ids.
     *
     * @var mixed[]|null
     */
    protected $relatedIds;
    /**
     * Booked customer phone.
     *
     * @var string|null
     */
    protected $customerPhone;
    /**
     * Booked customer first name.
     *
     * @var string|null
     */
    protected $customerFirstName;
    /**
     * Booked customer email.
     *
     * @var string|null
     */
    protected $customerEmail;
    /**
     * Booking additional description.
     *
     * @var string|null
     */
    protected $bookingComment;
    /**
     * Is callback needed.
     *
     * @var bool|null
     */
    protected $bookingCallback;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Employee id.
     */
    public function getUserId(): ?float
    {
        return $this->userId;
    }

    /**
     * Employee id.
     */
    public function setUserId(?float $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    /**
     * Booked date.
     */
    public function getReservedOn(): ?\DateTime
    {
        return $this->reservedOn;
    }

    /**
     * Booked date.
     */
    public function setReservedOn(?\DateTime $reservedOn): self
    {
        $this->initialized['reservedOn'] = true;
        $this->reservedOn = $reservedOn;

        return $this;
    }

    /**
     * Company branch date booked in.
     */
    public function getBranchId(): ?float
    {
        return $this->branchId;
    }

    /**
     * Company branch date booked in.
     */
    public function setBranchId(?float $branchId): self
    {
        $this->initialized['branchId'] = true;
        $this->branchId = $branchId;

        return $this;
    }

    /**
     * Booked service id.
     */
    public function getProductId(): ?float
    {
        return $this->productId;
    }

    /**
     * Booked service id.
     */
    public function setProductId(?float $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;

        return $this;
    }

    /**
     * Booked related services ids.
     *
     * @return mixed[]|null
     */
    public function getRelatedIds(): ?array
    {
        return $this->relatedIds;
    }

    /**
     * Booked related services ids.
     *
     * @param mixed[]|null $relatedIds
     */
    public function setRelatedIds(?array $relatedIds): self
    {
        $this->initialized['relatedIds'] = true;
        $this->relatedIds = $relatedIds;

        return $this;
    }

    /**
     * Booked customer phone.
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }

    /**
     * Booked customer phone.
     */
    public function setCustomerPhone(?string $customerPhone): self
    {
        $this->initialized['customerPhone'] = true;
        $this->customerPhone = $customerPhone;

        return $this;
    }

    /**
     * Booked customer first name.
     */
    public function getCustomerFirstName(): ?string
    {
        return $this->customerFirstName;
    }

    /**
     * Booked customer first name.
     */
    public function setCustomerFirstName(?string $customerFirstName): self
    {
        $this->initialized['customerFirstName'] = true;
        $this->customerFirstName = $customerFirstName;

        return $this;
    }

    /**
     * Booked customer email.
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    /**
     * Booked customer email.
     */
    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->initialized['customerEmail'] = true;
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Booking additional description.
     */
    public function getBookingComment(): ?string
    {
        return $this->bookingComment;
    }

    /**
     * Booking additional description.
     */
    public function setBookingComment(?string $bookingComment): self
    {
        $this->initialized['bookingComment'] = true;
        $this->bookingComment = $bookingComment;

        return $this;
    }

    /**
     * Is callback needed.
     */
    public function getBookingCallback(): ?bool
    {
        return $this->bookingCallback;
    }

    /**
     * Is callback needed.
     */
    public function setBookingCallback(?bool $bookingCallback): self
    {
        $this->initialized['bookingCallback'] = true;
        $this->bookingCallback = $bookingCallback;

        return $this;
    }
}
