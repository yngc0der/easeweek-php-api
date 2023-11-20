<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Endpoint;

class PostBookingsCompanyCompanySlugBook extends \Yngc0der\EasyWeek\Api\Runtime\Client\BaseEndpoint implements \Yngc0der\EasyWeek\Api\Runtime\Client\Endpoint
{
    use \Yngc0der\EasyWeek\Api\Runtime\Client\EndpointTrait;
    protected $companySlug;

    /**
     * Create new booking.
     *
     * @param string $companySlug the slug of the main company in EasyWeek
     * @param array $headerParameters {
     *     @var string $Authorization Bearer {EASYWEEK_PARTNER_TOKEN}
     * }
     */
    public function __construct(string $companySlug, \stdClass $body, array $headerParameters = [])
    {
        $this->companySlug = $companySlug;
        $this->body = $body;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{companySlug}'], [$this->companySlug], '/bookings/company/{companySlug}/book');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], $this->body];
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
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugBookPostResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugBookPostResponse200', 'json');
        }
    }
}
