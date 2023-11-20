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

class BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('time', $data) && null !== $data['time']) {
            $object->setTime($this->denormalizer->denormalize($data['time'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemTime', 'json', $context));
        } elseif (\array_key_exists('time', $data) && null === $data['time']) {
            $object->setTime(null);
        }
        if (\array_key_exists('users', $data) && null !== $data['users']) {
            $values = [];
            foreach ($data['users'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItemUsersItem', 'json', $context);
            }
            $object->setUsers($values);
        } elseif (\array_key_exists('users', $data) && null === $data['users']) {
            $object->setUsers(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['date'] = $object->getDate();
        if ($object->isInitialized('time') && null !== $object->getTime()) {
            $data['time'] = $this->normalizer->normalize($object->getTime(), 'json', $context);
        }
        if ($object->isInitialized('users') && null !== $object->getUsers()) {
            $values = [];
            foreach ($object->getUsers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['users'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem' => false];
    }
}
