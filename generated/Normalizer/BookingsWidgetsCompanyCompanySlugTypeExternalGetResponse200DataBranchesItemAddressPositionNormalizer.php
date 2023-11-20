<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Yngc0der\EasyWeek\Api\Runtime\Normalizer\CheckArray;
use Yngc0der\EasyWeek\Api\Runtime\Normalizer\ValidatorTrait;

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPositionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPosition' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPosition' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPosition();
        if (\array_key_exists('lat', $data) && \is_int($data['lat'])) {
            $data['lat'] = (float) $data['lat'];
        }
        if (\array_key_exists('lng', $data) && \is_int($data['lng'])) {
            $data['lng'] = (float) $data['lng'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lat', $data) && null !== $data['lat']) {
            $object->setLat($data['lat']);
        } elseif (\array_key_exists('lat', $data) && null === $data['lat']) {
            $object->setLat(null);
        }
        if (\array_key_exists('lng', $data) && null !== $data['lng']) {
            $object->setLng($data['lng']);
        } elseif (\array_key_exists('lng', $data) && null === $data['lng']) {
            $object->setLng(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['lat'] = $object->getLat();
        $data['lng'] = $object->getLng();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddressPosition' => false];
    }
}
