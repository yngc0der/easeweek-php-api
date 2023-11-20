<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItem
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
     * @var float|null
     */
    protected $priceDiscount;
    /**
     * @var mixed|null
     */
    protected $priceDiscountFormatted;
    /**
     * @var mixed|null
     */
    protected $currency;
    /**
     * @var float|null
     */
    protected $duration;
    /**
     * @var bool|null
     */
    protected $isDurationHidden;
    /**
     * @var bool|null
     */
    protected $isPriceHidden;
    /**
     * @var mixed|null
     */
    protected $description;
    /**
     * @var bool|null
     */
    protected $live;
    /**
     * @var bool|null
     */
    protected $startingAt;
    /**
     * @var bool|null
     */
    protected $isTop;
    /**
     * @var mixed[]|null
     */
    protected $relatedProducts;
    /**
     * @var mixed[]|null
     */
    protected $images;

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

    public function getPriceDiscount(): ?float
    {
        return $this->priceDiscount;
    }

    public function setPriceDiscount(?float $priceDiscount): self
    {
        $this->initialized['priceDiscount'] = true;
        $this->priceDiscount = $priceDiscount;

        return $this;
    }

    public function getPriceDiscountFormatted()
    {
        return $this->priceDiscountFormatted;
    }

    public function setPriceDiscountFormatted($priceDiscountFormatted): self
    {
        $this->initialized['priceDiscountFormatted'] = true;
        $this->priceDiscountFormatted = $priceDiscountFormatted;

        return $this;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    public function getIsDurationHidden(): ?bool
    {
        return $this->isDurationHidden;
    }

    public function setIsDurationHidden(?bool $isDurationHidden): self
    {
        $this->initialized['isDurationHidden'] = true;
        $this->isDurationHidden = $isDurationHidden;

        return $this;
    }

    public function getIsPriceHidden(): ?bool
    {
        return $this->isPriceHidden;
    }

    public function setIsPriceHidden(?bool $isPriceHidden): self
    {
        $this->initialized['isPriceHidden'] = true;
        $this->isPriceHidden = $isPriceHidden;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getLive(): ?bool
    {
        return $this->live;
    }

    public function setLive(?bool $live): self
    {
        $this->initialized['live'] = true;
        $this->live = $live;

        return $this;
    }

    public function getStartingAt(): ?bool
    {
        return $this->startingAt;
    }

    public function setStartingAt(?bool $startingAt): self
    {
        $this->initialized['startingAt'] = true;
        $this->startingAt = $startingAt;

        return $this;
    }

    public function getIsTop(): ?bool
    {
        return $this->isTop;
    }

    public function setIsTop(?bool $isTop): self
    {
        $this->initialized['isTop'] = true;
        $this->isTop = $isTop;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getRelatedProducts(): ?array
    {
        return $this->relatedProducts;
    }

    /**
     * @param mixed[]|null $relatedProducts
     */
    public function setRelatedProducts(?array $relatedProducts): self
    {
        $this->initialized['relatedProducts'] = true;
        $this->relatedProducts = $relatedProducts;

        return $this;
    }

    /**
     * @return mixed[]|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param mixed[]|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }
}
