<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Endpoint;

class DeleteApiWebsiteCompanyOrderHash extends \Yngc0der\EasyWeek\Api\Runtime\Client\BaseEndpoint implements \Yngc0der\EasyWeek\Api\Runtime\Client\Endpoint
{
    use \Yngc0der\EasyWeek\Api\Runtime\Client\EndpointTrait;
    protected $hashid;

    /**
     * Cancel booking using its hashed id.
     *
     * @param string $hashid booking's hashed id, returned after successful booking creation
     * @param array $headerParameters {
     *     @var string $Authorization Bearer {EASYWEEK_PARTNER_TOKEN}
     * }
     */
    public function __construct(string $hashid, array $headerParameters = [])
    {
        $this->hashid = $hashid;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{hashid}'], [$this->hashid], '/bookings/{hashid}');
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
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
    }
}
