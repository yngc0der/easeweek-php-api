<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItem
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
     * @var float|null
     */
    protected $price;
    /**
     * @var string|null
     */
    protected $priceFormatted;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItem[]|null
     */
    protected $variations;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemCategoriesItem[]|null
     */
    protected $categories;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    public function getPriceFormatted(): ?string
    {
        return $this->priceFormatted;
    }

    public function setPriceFormatted(?string $priceFormatted): self
    {
        $this->initialized['priceFormatted'] = true;
        $this->priceFormatted = $priceFormatted;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItem[]|null
     */
    public function getVariations(): ?array
    {
        return $this->variations;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItem[]|null $variations
     */
    public function setVariations(?array $variations): self
    {
        $this->initialized['variations'] = true;
        $this->variations = $variations;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemCategoriesItem[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemCategoriesItem[]|null $categories
     */
    public function setCategories(?array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

        return $this;
    }
}
