<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api;

class Client extends \Yngc0der\EasyWeek\Api\Runtime\Client\Client
{
    /**
     * Retrieve the config of the company with the matching company slug.
     *
     * @param string $companySlug the slug of the main company in EasyWeek
     * @param array $headerParameters {
     *     @var string $Authorization Bearer {EASYWEEK_PARTNER_TOKEN}
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function getCompanyConfig(string $companySlug, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Yngc0der\EasyWeek\Api\Endpoint\GetCompanyConfig($companySlug, $headerParameters), $fetch);
    }

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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugEmployeesDatesGetResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function getEmployeesDates(string $companySlug, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Yngc0der\EasyWeek\Api\Endpoint\GetEmployeesDates($companySlug, $queryParameters, $headerParameters), $fetch);
    }

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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugCalendarsGetResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function getAvailableSlots(string $companySlug, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Yngc0der\EasyWeek\Api\Endpoint\GetAvailableSlots($companySlug, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Create new booking.
     *
     * @param string $companySlug the slug of the main company in EasyWeek
     * @param array $headerParameters {
     *     @var string $Authorization Bearer {EASYWEEK_PARTNER_TOKEN}
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugBookPostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function postBookingsCompanyCompanySlugBook(string $companySlug, \stdClass $body, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Yngc0der\EasyWeek\Api\Endpoint\PostBookingsCompanyCompanySlugBook($companySlug, $body, $headerParameters), $fetch);
    }

    /**
     * Cancel booking using its hashed id.
     *
     * @param string $hashid booking's hashed id, returned after successful booking creation
     * @param array $headerParameters {
     *     @var string $Authorization Bearer {EASYWEEK_PARTNER_TOKEN}
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteApiWebsiteCompanyOrderHash(string $hashid, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Yngc0der\EasyWeek\Api\Endpoint\DeleteApiWebsiteCompanyOrderHash($hashid, $headerParameters), $fetch);
    }

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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Yngc0der\EasyWeek\Api\Model\BookingsBookingHashidStatusStatusIdPutResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function putBookingsBookingHashidStatusStatusId(string $bookingHashid, string $statusId, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Yngc0der\EasyWeek\Api\Endpoint\PutBookingsBookingHashidStatusStatusId($bookingHashid, $statusId, $queryParameters, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://widget.easyweek.io/api/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Yngc0der\EasyWeek\Api\Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
