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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDays' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDays' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDays();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fri', $data) && null !== $data['fri']) {
            $values = [];
            foreach ($data['fri'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysFriItem', 'json', $context);
            }
            $object->setFri($values);
        } elseif (\array_key_exists('fri', $data) && null === $data['fri']) {
            $object->setFri(null);
        }
        if (\array_key_exists('mon', $data) && null !== $data['mon']) {
            $values_1 = [];
            foreach ($data['mon'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysMonItem', 'json', $context);
            }
            $object->setMon($values_1);
        } elseif (\array_key_exists('mon', $data) && null === $data['mon']) {
            $object->setMon(null);
        }
        if (\array_key_exists('sat', $data) && null !== $data['sat']) {
            $values_2 = [];
            foreach ($data['sat'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysSatItem', 'json', $context);
            }
            $object->setSat($values_2);
        } elseif (\array_key_exists('sat', $data) && null === $data['sat']) {
            $object->setSat(null);
        }
        if (\array_key_exists('sun', $data) && null !== $data['sun']) {
            $values_3 = [];
            foreach ($data['sun'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysSunItem', 'json', $context);
            }
            $object->setSun($values_3);
        } elseif (\array_key_exists('sun', $data) && null === $data['sun']) {
            $object->setSun(null);
        }
        if (\array_key_exists('thu', $data) && null !== $data['thu']) {
            $values_4 = [];
            foreach ($data['thu'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysThuItem', 'json', $context);
            }
            $object->setThu($values_4);
        } elseif (\array_key_exists('thu', $data) && null === $data['thu']) {
            $object->setThu(null);
        }
        if (\array_key_exists('tue', $data) && null !== $data['tue']) {
            $values_5 = [];
            foreach ($data['tue'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysTueItem', 'json', $context);
            }
            $object->setTue($values_5);
        } elseif (\array_key_exists('tue', $data) && null === $data['tue']) {
            $object->setTue(null);
        }
        if (\array_key_exists('wed', $data) && null !== $data['wed']) {
            $values_6 = [];
            foreach ($data['wed'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDaysWedItem', 'json', $context);
            }
            $object->setWed($values_6);
        } elseif (\array_key_exists('wed', $data) && null === $data['wed']) {
            $object->setWed(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getFri() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['fri'] = $values;
        $values_1 = [];
        foreach ($object->getMon() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['mon'] = $values_1;
        $values_2 = [];
        foreach ($object->getSat() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['sat'] = $values_2;
        $values_3 = [];
        foreach ($object->getSun() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['sun'] = $values_3;
        $values_4 = [];
        foreach ($object->getThu() as $value_4) {
            $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
        }
        $data['thu'] = $values_4;
        $values_5 = [];
        foreach ($object->getTue() as $value_5) {
            $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
        }
        $data['tue'] = $values_5;
        $values_6 = [];
        foreach ($object->getWed() as $value_6) {
            $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
        }
        $data['wed'] = $values_6;

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemScheduleDays' => false];
    }
}
