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

class BookingsCompanyCompanySlugCalendarsGetResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugCalendarsGetResponse200Data' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugCalendarsGetResponse200Data' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugCalendarsGetResponse200Data();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('today', $data) && null !== $data['today']) {
            $object->setToday($data['today']);
        } elseif (\array_key_exists('today', $data) && null === $data['today']) {
            $object->setToday(null);
        }
        if (\array_key_exists('format', $data) && null !== $data['format']) {
            $object->setFormat($data['format']);
        } elseif (\array_key_exists('format', $data) && null === $data['format']) {
            $object->setFormat(null);
        }
        if (\array_key_exists('availability_timezone', $data) && null !== $data['availability_timezone']) {
            $object->setAvailabilityTimezone($data['availability_timezone']);
        } elseif (\array_key_exists('availability_timezone', $data) && null === $data['availability_timezone']) {
            $object->setAvailabilityTimezone(null);
        }
        if (\array_key_exists('days', $data) && null !== $data['days']) {
            $values = [];
            foreach ($data['days'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugCalendarsGetResponse200DataDaysItem', 'json', $context);
            }
            $object->setDays($values);
        } elseif (\array_key_exists('days', $data) && null === $data['days']) {
            $object->setDays(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['today'] = $object->getToday();
        $data['format'] = $object->getFormat();
        $data['availability_timezone'] = $object->getAvailabilityTimezone();
        $values = [];
        foreach ($object->getDays() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['days'] = $values;

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugCalendarsGetResponse200Data' => false];
    }
}
