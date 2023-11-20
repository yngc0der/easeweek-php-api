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

class BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItem' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItem();
        if (\array_key_exists('branch_id', $data) && \is_int($data['branch_id'])) {
            $data['branch_id'] = (float) $data['branch_id'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branch_id', $data) && null !== $data['branch_id']) {
            $object->setBranchId($data['branch_id']);
        } elseif (\array_key_exists('branch_id', $data) && null === $data['branch_id']) {
            $object->setBranchId(null);
        }
        if (\array_key_exists('dates', $data) && null !== $data['dates']) {
            $values = [];
            foreach ($data['dates'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItemDatesItem', 'json', $context);
            }
            $object->setDates($values);
        } elseif (\array_key_exists('dates', $data) && null === $data['dates']) {
            $object->setDates(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['branch_id'] = $object->getBranchId();
        if ($object->isInitialized('dates') && null !== $object->getDates()) {
            $values = [];
            foreach ($object->getDates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['dates'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugEmployeesDatesGetResponse200DataItem' => false];
    }
}
