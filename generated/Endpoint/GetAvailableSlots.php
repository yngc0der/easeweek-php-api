<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Endpoint;

class GetAvailableSlots extends \Yngc0der\EasyWeek\Api\Runtime\Client\BaseEndpoint implements \Yngc0der\EasyWeek\Api\Runtime\Client\Endpoint
{
    use \Yngc0der\EasyWeek\Api\Runtime\Client\EndpointTrait;
    protected $companySlug;

    /**
     * Show all available date slots for user and service.
     *
     * @param string $companySlug the slug of the main company in EasyWeek
     * @param array $queryParameters {
     *     @var string $range_start Filter by start date (YYYY-MM-DD)
     *     @var string $range_end Filter by end date (YYYY-MM-DD)
     *     @var float $service Service ID
     *     @var float $branch Location ID
     *     @var float $user User ID
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
        return str_replace(['{companySlug}'], [$this->companySlug], '/bookings/company/{companySlug}/calendars');
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
        $optionsResolver->setDefined(['range_start', 'range_end', 'service', 'branch', 'user']);
        $optionsResolver->setRequired(['range_start', 'range_end', 'service', 'branch', 'user']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('range_start', ['string']);
        $optionsResolver->addAllowedTypes('range_end', ['string']);
        $optionsResolver->addAllowedTypes('service', ['float']);
        $optionsResolver->addAllowedTypes('branch', ['float']);
        $optionsResolver->addAllowedTypes('user', ['float']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Authorization']);
        $optionsResolver->setRequired(['Authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugCalendarsGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugCalendarsGetResponse200', 'json');
        }
    }
}
