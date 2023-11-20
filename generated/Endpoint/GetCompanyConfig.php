<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Endpoint;

class GetCompanyConfig extends \Yngc0der\EasyWeek\Api\Runtime\Client\BaseEndpoint implements \Yngc0der\EasyWeek\Api\Runtime\Client\Endpoint
{
    use \Yngc0der\EasyWeek\Api\Runtime\Client\EndpointTrait;
    protected $companySlug;

    /**
     * Retrieve the config of the company with the matching company slug.
     *
     * @param string $companySlug the slug of the main company in EasyWeek
     * @param array $headerParameters {
     *     @var string $Authorization Bearer {EASYWEEK_PARTNER_TOKEN}
     * }
     */
    public function __construct(string $companySlug, array $headerParameters = [])
    {
        $this->companySlug = $companySlug;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{companySlug}'], [$this->companySlug], '/bookings/widgets/company/{companySlug}/type/external');
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
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200', 'json');
        }
    }
}
