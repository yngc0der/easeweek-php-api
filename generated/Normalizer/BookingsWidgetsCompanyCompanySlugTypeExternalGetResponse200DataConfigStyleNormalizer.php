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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyle' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyle' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('primary', $data) && null !== $data['primary']) {
            $object->setPrimary($data['primary']);
        } elseif (\array_key_exists('primary', $data) && null === $data['primary']) {
            $object->setPrimary(null);
        }
        if (\array_key_exists('surface', $data) && null !== $data['surface']) {
            $object->setSurface($data['surface']);
        } elseif (\array_key_exists('surface', $data) && null === $data['surface']) {
            $object->setSurface(null);
        }
        if (\array_key_exists('secondary', $data) && null !== $data['secondary']) {
            $object->setSecondary($data['secondary']);
        } elseif (\array_key_exists('secondary', $data) && null === $data['secondary']) {
            $object->setSecondary(null);
        }
        if (\array_key_exists('on-primary', $data) && null !== $data['on-primary']) {
            $object->setOnPrimary($data['on-primary']);
        } elseif (\array_key_exists('on-primary', $data) && null === $data['on-primary']) {
            $object->setOnPrimary(null);
        }
        if (\array_key_exists('on-surface', $data) && null !== $data['on-surface']) {
            $object->setOnSurface($data['on-surface']);
        } elseif (\array_key_exists('on-surface', $data) && null === $data['on-surface']) {
            $object->setOnSurface(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['primary'] = $object->getPrimary();
        $data['surface'] = $object->getSurface();
        $data['secondary'] = $object->getSecondary();
        $data['on-primary'] = $object->getOnPrimary();
        $data['on-surface'] = $object->getOnSurface();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfigStyle' => false];
    }
}
