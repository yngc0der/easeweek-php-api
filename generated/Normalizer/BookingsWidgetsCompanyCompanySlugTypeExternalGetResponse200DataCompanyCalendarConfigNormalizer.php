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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendarConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendarConfig' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendarConfig' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendarConfig();
        if (\array_key_exists('duration', $data) && \is_int($data['duration'])) {
            $data['duration'] = (float) $data['duration'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $object->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $object->setDuration(null);
        }
        if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
            $object->setTimezone($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
            $object->setTimezone(null);
        }
        if (\array_key_exists('working_days', $data) && null !== $data['working_days']) {
            $values = [];
            foreach ($data['working_days'] as $value) {
                $values[] = $value;
            }
            $object->setWorkingDays($values);
        } elseif (\array_key_exists('working_days', $data) && null === $data['working_days']) {
            $object->setWorkingDays(null);
        }
        if (\array_key_exists('working_dates', $data) && null !== $data['working_dates']) {
            $values_1 = [];
            foreach ($data['working_dates'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWorkingDates($values_1);
        } elseif (\array_key_exists('working_dates', $data) && null === $data['working_dates']) {
            $object->setWorkingDates(null);
        }
        if (\array_key_exists('working_hours', $data) && null !== $data['working_hours']) {
            $values_2 = [];
            foreach ($data['working_hours'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendarConfigWorkingHoursItem', 'json', $context);
            }
            $object->setWorkingHours($values_2);
        } elseif (\array_key_exists('working_hours', $data) && null === $data['working_hours']) {
            $object->setWorkingHours(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['duration'] = $object->getDuration();
        $data['timezone'] = $object->getTimezone();
        $values = [];
        foreach ($object->getWorkingDays() as $value) {
            $values[] = $value;
        }
        $data['working_days'] = $values;
        $values_1 = [];
        foreach ($object->getWorkingDates() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['working_dates'] = $values_1;
        $values_2 = [];
        foreach ($object->getWorkingHours() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['working_hours'] = $values_2;

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendarConfig' => false];
    }
}
