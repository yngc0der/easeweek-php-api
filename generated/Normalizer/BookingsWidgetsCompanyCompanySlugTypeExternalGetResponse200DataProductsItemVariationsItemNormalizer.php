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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItem' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItem();
        if (\array_key_exists('id', $data) && \is_int($data['id'])) {
            $data['id'] = (float) $data['id'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('price_discount', $data) && \is_int($data['price_discount'])) {
            $data['price_discount'] = (float) $data['price_discount'];
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
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
        }
        if (\array_key_exists('price_formatted', $data) && null !== $data['price_formatted']) {
            $object->setPriceFormatted($data['price_formatted']);
        } elseif (\array_key_exists('price_formatted', $data) && null === $data['price_formatted']) {
            $object->setPriceFormatted(null);
        }
        if (\array_key_exists('price_discount', $data) && null !== $data['price_discount']) {
            $object->setPriceDiscount($data['price_discount']);
        } elseif (\array_key_exists('price_discount', $data) && null === $data['price_discount']) {
            $object->setPriceDiscount(null);
        }
        if (\array_key_exists('price_discount_formatted', $data) && null !== $data['price_discount_formatted']) {
            $object->setPriceDiscountFormatted($data['price_discount_formatted']);
        } elseif (\array_key_exists('price_discount_formatted', $data) && null === $data['price_discount_formatted']) {
            $object->setPriceDiscountFormatted(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $object->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $object->setDuration(null);
        }
        if (\array_key_exists('is_duration_hidden', $data) && null !== $data['is_duration_hidden']) {
            $object->setIsDurationHidden($data['is_duration_hidden']);
        } elseif (\array_key_exists('is_duration_hidden', $data) && null === $data['is_duration_hidden']) {
            $object->setIsDurationHidden(null);
        }
        if (\array_key_exists('is_price_hidden', $data) && null !== $data['is_price_hidden']) {
            $object->setIsPriceHidden($data['is_price_hidden']);
        } elseif (\array_key_exists('is_price_hidden', $data) && null === $data['is_price_hidden']) {
            $object->setIsPriceHidden(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('live', $data) && null !== $data['live']) {
            $object->setLive($data['live']);
        } elseif (\array_key_exists('live', $data) && null === $data['live']) {
            $object->setLive(null);
        }
        if (\array_key_exists('starting_at', $data) && null !== $data['starting_at']) {
            $object->setStartingAt($data['starting_at']);
        } elseif (\array_key_exists('starting_at', $data) && null === $data['starting_at']) {
            $object->setStartingAt(null);
        }
        if (\array_key_exists('is_top', $data) && null !== $data['is_top']) {
            $object->setIsTop($data['is_top']);
        } elseif (\array_key_exists('is_top', $data) && null === $data['is_top']) {
            $object->setIsTop(null);
        }
        if (\array_key_exists('related_products', $data) && null !== $data['related_products']) {
            $values = [];
            foreach ($data['related_products'] as $value) {
                $values[] = $value;
            }
            $object->setRelatedProducts($values);
        } elseif (\array_key_exists('related_products', $data) && null === $data['related_products']) {
            $object->setRelatedProducts(null);
        }
        if (\array_key_exists('images', $data) && null !== $data['images']) {
            $values_1 = [];
            foreach ($data['images'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setImages($values_1);
        } elseif (\array_key_exists('images', $data) && null === $data['images']) {
            $object->setImages(null);
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
        $data['price'] = $object->getPrice();
        $data['price_formatted'] = $object->getPriceFormatted();
        $data['price_discount'] = $object->getPriceDiscount();
        if ($object->isInitialized('priceDiscountFormatted') && null !== $object->getPriceDiscountFormatted()) {
            $data['price_discount_formatted'] = $object->getPriceDiscountFormatted();
        }
        if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        $data['duration'] = $object->getDuration();
        $data['is_duration_hidden'] = $object->getIsDurationHidden();
        $data['is_price_hidden'] = $object->getIsPriceHidden();
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['live'] = $object->getLive();
        $data['starting_at'] = $object->getStartingAt();
        $data['is_top'] = $object->getIsTop();
        if ($object->isInitialized('relatedProducts') && null !== $object->getRelatedProducts()) {
            $values = [];
            foreach ($object->getRelatedProducts() as $value) {
                $values[] = $value;
            }
            $data['related_products'] = $values;
        }
        if ($object->isInitialized('images') && null !== $object->getImages()) {
            $values_1 = [];
            foreach ($object->getImages() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['images'] = $values_1;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItemVariationsItem' => false];
    }
}
