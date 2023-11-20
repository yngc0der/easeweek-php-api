<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsCompanyCompanySlugBookPostResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $hashid;
    /**
     * @var string|null
     */
    protected $ical;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getHashid(): ?string
    {
        return $this->hashid;
    }

    public function setHashid(?string $hashid): self
    {
        $this->initialized['hashid'] = true;
        $this->hashid = $hashid;

        return $this;
    }

    public function getIcal(): ?string
    {
        return $this->ical;
    }

    public function setIcal(?string $ical): self
    {
        $this->initialized['ical'] = true;
        $this->ical = $ical;

        return $this;
    }
}
