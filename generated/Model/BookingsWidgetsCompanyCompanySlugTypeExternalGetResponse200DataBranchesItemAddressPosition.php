<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPosition
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var float|null
     */
    protected $lat;
    /**
     * @var float|null
     */
    protected $lng;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(?float $lat): self
    {
        $this->initialized['lat'] = true;
        $this->lat = $lat;

        return $this;
    }

    public function getLng(): ?float
    {
        return $this->lng;
    }

    public function setLng(?float $lng): self
    {
        $this->initialized['lng'] = true;
        $this->lng = $lng;

        return $this;
    }
}
