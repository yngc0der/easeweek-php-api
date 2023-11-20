<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem
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
    protected $avatar;
    /**
     * @var string|null
     */
    protected $position;
    /**
     * @var bool|null
     */
    protected $hidePosition;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItemProfile|null
     */
    protected $profile;

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

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->initialized['avatar'] = true;
        $this->avatar = $avatar;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    public function getHidePosition(): ?bool
    {
        return $this->hidePosition;
    }

    public function setHidePosition(?bool $hidePosition): self
    {
        $this->initialized['hidePosition'] = true;
        $this->hidePosition = $hidePosition;

        return $this;
    }

    public function getProfile(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItemProfile
    {
        return $this->profile;
    }

    public function setProfile(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItemProfile $profile): self
    {
        $this->initialized['profile'] = true;
        $this->profile = $profile;

        return $this;
    }
}
