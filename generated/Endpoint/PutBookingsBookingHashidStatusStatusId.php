<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Endpoint;

class PutBookingsBookingHashidStatusStatusId extends \Yngc0der\EasyWeek\Api\Runtime\Client\BaseEndpoint implements \Yngc0der\EasyWeek\Api\Runtime\Client\Endpoint
{
    use \Yngc0der\EasyWeek\Api\Runtime\Client\EndpointTrait;
    protected $booking_hashid;
    protected $status_id;

    /**
     * Enpoint to update booking to a new status. Final successful and unsuccessful statuses are prohibited.
     *
     * @param array $queryParameters {
     *     @var string $booking_hashid Booking hashid
     *     @var string $status_id Lead status id
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Bearer {EASYWEEK_PARTNER_TOKEN}
     * }
     */
    public function __construct(string $bookingHashid, string $statusId, array $queryParameters = [], array $headerParameters = [])
    {
        $this->booking_hashid = $bookingHashid;
        $this->status_id = $statusId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{booking_hashid}', '{status_id}'], [$this->booking_hashid, $this->status_id], '/bookings/{booking_hashid}/status/{status_id}');
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
        $optionsResolver->setDefined(['booking_hashid', 'status_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('booking_hashid', ['string']);
        $optionsResolver->addAllowedTypes('status_id', ['string']);

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
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsBookingHashidStatusStatusIdPutResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsBookingHashidStatusStatusIdPutResponse200', 'json');
        }
    }
}
