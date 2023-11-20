<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Model;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200Data
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Parent company page URL.
     *
     * @var string|null
     */
    protected $url;
    /**
     * Parent company data.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany|null
     */
    protected $company;
    /**
     * Widget global config.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfig|null
     */
    protected $config;
    /**
     * Parent company branches data.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem[]|null
     */
    protected $branches;
    /**
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItem[]|null
     */
    protected $products;
    /**
     * All company employees.
     *
     * @var BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem[]|null
     */
    protected $users;
    /**
     * If company has active subscription.
     *
     * @var bool|null
     */
    protected $subscription;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Parent company page URL.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Parent company page URL.
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Parent company data.
     */
    public function getCompany(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany
    {
        return $this->company;
    }

    /**
     * Parent company data.
     */
    public function setCompany(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    /**
     * Widget global config.
     */
    public function getConfig(): ?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfig
    {
        return $this->config;
    }

    /**
     * Widget global config.
     */
    public function setConfig(?BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfig $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;

        return $this;
    }

    /**
     * Parent company branches data.
     *
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem[]|null
     */
    public function getBranches(): ?array
    {
        return $this->branches;
    }

    /**
     * Parent company branches data.
     *
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem[]|null $branches
     */
    public function setBranches(?array $branches): self
    {
        $this->initialized['branches'] = true;
        $this->branches = $branches;

        return $this;
    }

    /**
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItem[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItem[]|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }

    /**
     * All company employees.
     *
     * @return BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * All company employees.
     *
     * @param BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem[]|null $users
     */
    public function setUsers(?array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;

        return $this;
    }

    /**
     * If company has active subscription.
     */
    public function getSubscription(): ?bool
    {
        return $this->subscription;
    }

    /**
     * If company has active subscription.
     */
    public function setSubscription(?bool $subscription): self
    {
        $this->initialized['subscription'] = true;
        $this->subscription = $subscription;

        return $this;
    }
}
