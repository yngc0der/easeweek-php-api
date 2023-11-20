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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany();
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
        if (\array_key_exists('slug', $data) && null !== $data['slug']) {
            $object->setSlug($data['slug']);
        } elseif (\array_key_exists('slug', $data) && null === $data['slug']) {
            $object->setSlug(null);
        }
        if (\array_key_exists('show_service_end_time', $data) && null !== $data['show_service_end_time']) {
            $object->setShowServiceEndTime($data['show_service_end_time']);
        } elseif (\array_key_exists('show_service_end_time', $data) && null === $data['show_service_end_time']) {
            $object->setShowServiceEndTime(null);
        }
        if (\array_key_exists('is_copyrighted', $data) && null !== $data['is_copyrighted']) {
            $object->setIsCopyrighted($data['is_copyrighted']);
        } elseif (\array_key_exists('is_copyrighted', $data) && null === $data['is_copyrighted']) {
            $object->setIsCopyrighted(null);
        }
        if (\array_key_exists('is_company_rating', $data) && null !== $data['is_company_rating']) {
            $object->setIsCompanyRating($data['is_company_rating']);
        } elseif (\array_key_exists('is_company_rating', $data) && null === $data['is_company_rating']) {
            $object->setIsCompanyRating(null);
        }
        if (\array_key_exists('is_user_rating', $data) && null !== $data['is_user_rating']) {
            $object->setIsUserRating($data['is_user_rating']);
        } elseif (\array_key_exists('is_user_rating', $data) && null === $data['is_user_rating']) {
            $object->setIsUserRating(null);
        }
        if (\array_key_exists('country', $data) && null !== $data['country']) {
            $object->setCountry($data['country']);
        } elseif (\array_key_exists('country', $data) && null === $data['country']) {
            $object->setCountry(null);
        }
        if (\array_key_exists('images', $data) && null !== $data['images']) {
            $values = [];
            foreach ($data['images'] as $value) {
                $values[] = $value;
            }
            $object->setImages($values);
        } elseif (\array_key_exists('images', $data) && null === $data['images']) {
            $object->setImages(null);
        }
        if (\array_key_exists('profile', $data) && null !== $data['profile']) {
            $object->setProfile($this->denormalizer->denormalize($data['profile'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyProfile', 'json', $context));
        } elseif (\array_key_exists('profile', $data) && null === $data['profile']) {
            $object->setProfile(null);
        }
        if (\array_key_exists('about', $data) && null !== $data['about']) {
            $object->setAbout($data['about']);
        } elseif (\array_key_exists('about', $data) && null === $data['about']) {
            $object->setAbout(null);
        }
        if (\array_key_exists('public', $data) && null !== $data['public']) {
            $object->setPublic($data['public']);
        } elseif (\array_key_exists('public', $data) && null === $data['public']) {
            $object->setPublic(null);
        }
        if (\array_key_exists('is_address_hidden', $data) && null !== $data['is_address_hidden']) {
            $object->setIsAddressHidden($data['is_address_hidden']);
        } elseif (\array_key_exists('is_address_hidden', $data) && null === $data['is_address_hidden']) {
            $object->setIsAddressHidden(null);
        }
        if (\array_key_exists('calendar', $data) && null !== $data['calendar']) {
            $object->setCalendar($this->denormalizer->denormalize($data['calendar'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyCalendar', 'json', $context));
        } elseif (\array_key_exists('calendar', $data) && null === $data['calendar']) {
            $object->setCalendar(null);
        }
        if (\array_key_exists('users', $data) && null !== $data['users']) {
            $values_1 = [];
            foreach ($data['users'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompanyUsersItem', 'json', $context);
            }
            $object->setUsers($values_1);
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
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        $data['slug'] = $object->getSlug();
        $data['show_service_end_time'] = $object->getShowServiceEndTime();
        $data['is_copyrighted'] = $object->getIsCopyrighted();
        $data['is_company_rating'] = $object->getIsCompanyRating();
        $data['is_user_rating'] = $object->getIsUserRating();
        $data['country'] = $object->getCountry();
        $values = [];
        foreach ($object->getImages() as $value) {
            $values[] = $value;
        }
        $data['images'] = $values;
        $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        $data['about'] = $object->getAbout();
        $data['public'] = $object->getPublic();
        $data['is_address_hidden'] = $object->getIsAddressHidden();
        $data['calendar'] = $this->normalizer->normalize($object->getCalendar(), 'json', $context);
        $values_1 = [];
        foreach ($object->getUsers() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['users'] = $values_1;

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany' => false];
    }
}
