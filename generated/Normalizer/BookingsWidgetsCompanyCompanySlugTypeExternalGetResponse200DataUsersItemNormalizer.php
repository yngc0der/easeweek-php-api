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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem();
        if (\array_key_exists('id', $data) && \is_int($data['id'])) {
            $data['id'] = (float) $data['id'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('avatar', $data) && null !== $data['avatar']) {
            $object->setAvatar($data['avatar']);
        } elseif (\array_key_exists('avatar', $data) && null === $data['avatar']) {
            $object->setAvatar(null);
        }
        if (\array_key_exists('position', $data) && null !== $data['position']) {
            $object->setPosition($data['position']);
        } elseif (\array_key_exists('position', $data) && null === $data['position']) {
            $object->setPosition(null);
        }
        if (\array_key_exists('hide_position', $data) && null !== $data['hide_position']) {
            $object->setHidePosition($data['hide_position']);
        } elseif (\array_key_exists('hide_position', $data) && null === $data['hide_position']) {
            $object->setHidePosition(null);
        }
        if (\array_key_exists('profile', $data) && null !== $data['profile']) {
            $object->setProfile($this->denormalizer->denormalize($data['profile'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItemProfile', 'json', $context));
        } elseif (\array_key_exists('profile', $data) && null === $data['profile']) {
            $object->setProfile(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        $data['avatar'] = $object->getAvatar();
        $data['position'] = $object->getPosition();
        $data['hide_position'] = $object->getHidePosition();
        if ($object->isInitialized('profile') && null !== $object->getProfile()) {
            $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem' => false];
    }
}
