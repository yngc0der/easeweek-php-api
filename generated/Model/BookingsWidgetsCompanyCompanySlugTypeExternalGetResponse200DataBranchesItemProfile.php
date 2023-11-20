<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile
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
    protected $companyType;
    /**
     * @var string|null
     */
    protected $currency;
    /**
     * @var mixed[]|null
     */
    protected $phone;
    /**
     * @var string|null
     */
    protected $timezone;
    /**
     * @var string|null
     */
    protected $locale;
    /**
     * @var string|null
     */
    protected $language;
    /**
     * @var string|null
     */
    protected $industry;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var mixed|null
     */
    protected $instagram;
    /**
     * @var mixed|null
     */
    protected $facebook;
    /**
     * @var mixed|null
     */
    protected $whatsapp;
    /**
     * @var mixed|null
     */
    protected $viber;
    /**
     * @var mixed|null
     */
    protected $telegram;

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

    public function getCompanyType(): ?string
    {
        return $this->companyType;
    }

    public function setCompanyType(?string $companyType): self
    {
        $this->initialized['companyType'] = true;
        $this->companyType = $companyType;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getPhone(): ?array
    {
        return $this->phone;
    }

    /**
     * @param mixed[]|null $phone
     */
    public function setPhone(?array $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

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

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getIndustry(): ?string
    {
        return $this->industry;
    }

    public function setIndustry(?string $industry): self
    {
        $this->initialized['industry'] = true;
        $this->industry = $industry;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getInstagram()
    {
        return $this->instagram;
    }

    public function setInstagram($instagram): self
    {
        $this->initialized['instagram'] = true;
        $this->instagram = $instagram;

        return $this;
    }

    public function getFacebook()
    {
        return $this->facebook;
    }

    public function setFacebook($facebook): self
    {
        $this->initialized['facebook'] = true;
        $this->facebook = $facebook;

        return $this;
    }

    public function getWhatsapp()
    {
        return $this->whatsapp;
    }

    public function setWhatsapp($whatsapp): self
    {
        $this->initialized['whatsapp'] = true;
        $this->whatsapp = $whatsapp;

        return $this;
    }

    public function getViber()
    {
        return $this->viber;
    }

    public function setViber($viber): self
    {
        $this->initialized['viber'] = true;
        $this->viber = $viber;

        return $this;
    }

    public function getTelegram()
    {
        return $this->telegram;
    }

    public function setTelegram($telegram): self
    {
        $this->initialized['telegram'] = true;
        $this->telegram = $telegram;

        return $this;
    }
}
