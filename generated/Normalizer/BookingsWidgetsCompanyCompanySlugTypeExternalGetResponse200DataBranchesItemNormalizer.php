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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem();
        if (\array_key_exists('id', $data) && \is_int($data['id'])) {
            $data['id'] = (float) $data['id'];
        }
        if (\array_key_exists('duration', $data) && \is_int($data['duration'])) {
            $data['duration'] = (float) $data['duration'];
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
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemAddress', 'json', $context));
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        if (\array_key_exists('profile', $data) && null !== $data['profile']) {
            $object->setProfile($this->denormalizer->denormalize($data['profile'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile', 'json', $context));
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
            $values_1 = [];
            foreach ($data['working_days'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWorkingDays($values_1);
        } elseif (\array_key_exists('working_days', $data) && null === $data['working_days']) {
            $object->setWorkingDays(null);
        }
        if (\array_key_exists('working_dates', $data) && null !== $data['working_dates']) {
            $values_2 = [];
            foreach ($data['working_dates'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setWorkingDates($values_2);
        } elseif (\array_key_exists('working_dates', $data) && null === $data['working_dates']) {
            $object->setWorkingDates(null);
        }
        if (\array_key_exists('working_hours', $data) && null !== $data['working_hours']) {
            $values_3 = [];
            foreach ($data['working_hours'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setWorkingHours($values_3);
        } elseif (\array_key_exists('working_hours', $data) && null === $data['working_hours']) {
            $object->setWorkingHours(null);
        }
        if (\array_key_exists('products', $data) && null !== $data['products']) {
            $values_4 = [];
            foreach ($data['products'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProductsItem', 'json', $context);
            }
            $object->setProducts($values_4);
        } elseif (\array_key_exists('products', $data) && null === $data['products']) {
            $object->setProducts(null);
        }
        if (\array_key_exists('calendar', $data) && null !== $data['calendar']) {
            $object->setCalendar($this->denormalizer->denormalize($data['calendar'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemCalendar', 'json', $context));
        } elseif (\array_key_exists('calendar', $data) && null === $data['calendar']) {
            $object->setCalendar(null);
        }
        if (\array_key_exists('schedule', $data) && null !== $data['schedule']) {
            $object->setSchedule($this->denormalizer->denormalize($data['schedule'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemSchedule', 'json', $context));
        } elseif (\array_key_exists('schedule', $data) && null === $data['schedule']) {
            $object->setSchedule(null);
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
        if ($object->isInitialized('showServiceEndTime') && null !== $object->getShowServiceEndTime()) {
            $data['show_service_end_time'] = $object->getShowServiceEndTime();
        }
        $data['is_copyrighted'] = $object->getIsCopyrighted();
        $data['is_company_rating'] = $object->getIsCompanyRating();
        $data['is_user_rating'] = $object->getIsUserRating();
        $data['country'] = $object->getCountry();
        if ($object->isInitialized('images') && null !== $object->getImages()) {
            $values = [];
            foreach ($object->getImages() as $value) {
                $values[] = $value;
            }
            $data['images'] = $values;
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('profile') && null !== $object->getProfile()) {
            $data['profile'] = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        }
        $data['about'] = $object->getAbout();
        $data['public'] = $object->getPublic();
        $data['is_address_hidden'] = $object->getIsAddressHidden();
        $data['duration'] = $object->getDuration();
        $data['timezone'] = $object->getTimezone();
        if ($object->isInitialized('workingDays') && null !== $object->getWorkingDays()) {
            $values_1 = [];
            foreach ($object->getWorkingDays() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['working_days'] = $values_1;
        }
        if ($object->isInitialized('workingDates') && null !== $object->getWorkingDates()) {
            $values_2 = [];
            foreach ($object->getWorkingDates() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['working_dates'] = $values_2;
        }
        if ($object->isInitialized('workingHours') && null !== $object->getWorkingHours()) {
            $values_3 = [];
            foreach ($object->getWorkingHours() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['working_hours'] = $values_3;
        }
        if ($object->isInitialized('products') && null !== $object->getProducts()) {
            $values_4 = [];
            foreach ($object->getProducts() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['products'] = $values_4;
        }
        if ($object->isInitialized('calendar') && null !== $object->getCalendar()) {
            $data['calendar'] = $this->normalizer->normalize($object->getCalendar(), 'json', $context);
        }
        if ($object->isInitialized('schedule') && null !== $object->getSchedule()) {
            $data['schedule'] = $this->normalizer->normalize($object->getSchedule(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem' => false];
    }
}
