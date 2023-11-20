<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyle
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $primary;
    /**
     * @var string|null
     */
    protected $surface;
    /**
     * @var string|null
     */
    protected $secondary;
    /**
     * @var string|null
     */
    protected $onPrimary;
    /**
     * @var string|null
     */
    protected $onSurface;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getPrimary(): ?string
    {
        return $this->primary;
    }

    public function setPrimary(?string $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(?string $surface): self
    {
        $this->initialized['surface'] = true;
        $this->surface = $surface;

        return $this;
    }

    public function getSecondary(): ?string
    {
        return $this->secondary;
    }

    public function setSecondary(?string $secondary): self
    {
        $this->initialized['secondary'] = true;
        $this->secondary = $secondary;

        return $this;
    }

    public function getOnPrimary(): ?string
    {
        return $this->onPrimary;
    }

    public function setOnPrimary(?string $onPrimary): self
    {
        $this->initialized['onPrimary'] = true;
        $this->onPrimary = $onPrimary;

        return $this;
    }

    public function getOnSurface(): ?string
    {
        return $this->onSurface;
    }

    public function setOnSurface(?string $onSurface): self
    {
        $this->initialized['onSurface'] = true;
        $this->onSurface = $onSurface;

        return $this;
    }
}
