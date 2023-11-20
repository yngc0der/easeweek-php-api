<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfig
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Widget colors & styles.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyle|null
     */
    protected $style;
    /**
     * Widget booking form configuration.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigContactFormItem[]|null
     */
    protected $contactForm;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Widget colors & styles.
     */
    public function getStyle(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyle
    {
        return $this->style;
    }

    /**
     * Widget colors & styles.
     */
    public function setStyle(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyle $style): self
    {
        $this->initialized['style'] = true;
        $this->style = $style;

        return $this;
    }

    /**
     * Widget booking form configuration.
     *
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigContactFormItem[]|null
     */
    public function getContactForm(): ?array
    {
        return $this->contactForm;
    }

    /**
     * Widget booking form configuration.
     *
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigContactFormItem[]|null $contactForm
     */
    public function setContactForm(?array $contactForm): self
    {
        $this->initialized['contactForm'] = true;
        $this->contactForm = $contactForm;

        return $this;
    }
}
