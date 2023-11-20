<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Endpoint;

class GetEmployeesDates extends \Yngc0der\EasyWeek\Api\Runtime\Client\BaseEndpoint implements \Yngc0der\EasyWeek\Api\Runtime\Client\Endpoint
{
    use \Yngc0der\EasyWeek\Api\Runtime\Client\EndpointTrait;
    protected $companySlug;

    /**
     * Get all available date slots for service and location.
     *
     * @param string $companySlug the slug of the main company in EasyWeek
     * @param array $queryParameters {
     *     @var float $service Service ID
     *     @var float $location Location ID
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer {EASYWEEK_PARTNER_TOKEN}
     * }
     */
    public function __construct(string $companySlug, array $queryParameters = [], array $headerParameters = [])
    {
        $this->companySlug = $companySlug;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{companySlug}'], [$this->companySlug], '/bookings/company/{companySlug}/employees/dates');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['service', 'location']);
        $optionsResolver->setRequired(['service', 'location']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('service', ['float']);
        $optionsResolver->addAllowedTypes('location', ['float']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Authorization']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugEmployeesDatesGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200', 'json');
        }
    }
}
