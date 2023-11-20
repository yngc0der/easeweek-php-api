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

class BookingsCompanyCompanySlugBookPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugBookPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugBookPostBody' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsCompanyCompanySlugBookPostBody();
        if (\array_key_exists('user_id', $data) && \is_int($data['user_id'])) {
            $data['user_id'] = (float) $data['user_id'];
        }
        if (\array_key_exists('branch_id', $data) && \is_int($data['branch_id'])) {
            $data['branch_id'] = (float) $data['branch_id'];
        }
        if (\array_key_exists('product_id', $data) && \is_int($data['product_id'])) {
            $data['product_id'] = (float) $data['product_id'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('reserved_on', $data) && null !== $data['reserved_on']) {
            $object->setReservedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['reserved_on']));
        } elseif (\array_key_exists('reserved_on', $data) && null === $data['reserved_on']) {
            $object->setReservedOn(null);
        }
        if (\array_key_exists('branch_id', $data) && null !== $data['branch_id']) {
            $object->setBranchId($data['branch_id']);
        } elseif (\array_key_exists('branch_id', $data) && null === $data['branch_id']) {
            $object->setBranchId(null);
        }
        if (\array_key_exists('product_id', $data) && null !== $data['product_id']) {
            $object->setProductId($data['product_id']);
        } elseif (\array_key_exists('product_id', $data) && null === $data['product_id']) {
            $object->setProductId(null);
        }
        if (\array_key_exists('related_ids', $data) && null !== $data['related_ids']) {
            $values = [];
            foreach ($data['related_ids'] as $value) {
                $values[] = $value;
            }
            $object->setRelatedIds($values);
        } elseif (\array_key_exists('related_ids', $data) && null === $data['related_ids']) {
            $object->setRelatedIds(null);
        }
        if (\array_key_exists('customer_phone', $data) && null !== $data['customer_phone']) {
            $object->setCustomerPhone($data['customer_phone']);
        } elseif (\array_key_exists('customer_phone', $data) && null === $data['customer_phone']) {
            $object->setCustomerPhone(null);
        }
        if (\array_key_exists('customer_first_name', $data) && null !== $data['customer_first_name']) {
            $object->setCustomerFirstName($data['customer_first_name']);
        } elseif (\array_key_exists('customer_first_name', $data) && null === $data['customer_first_name']) {
            $object->setCustomerFirstName(null);
        }
        if (\array_key_exists('customer_email', $data) && null !== $data['customer_email']) {
            $object->setCustomerEmail($data['customer_email']);
        } elseif (\array_key_exists('customer_email', $data) && null === $data['customer_email']) {
            $object->setCustomerEmail(null);
        }
        if (\array_key_exists('booking_comment', $data) && null !== $data['booking_comment']) {
            $object->setBookingComment($data['booking_comment']);
        } elseif (\array_key_exists('booking_comment', $data) && null === $data['booking_comment']) {
            $object->setBookingComment(null);
        }
        if (\array_key_exists('booking_callback', $data) && null !== $data['booking_callback']) {
            $object->setBookingCallback($data['booking_callback']);
        } elseif (\array_key_exists('booking_callback', $data) && null === $data['booking_callback']) {
            $object->setBookingCallback(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['user_id'] = $object->getUserId();
        $data['reserved_on'] = $object->getReservedOn()->format('Y-m-d\\TH:i:sP');
        $data['branch_id'] = $object->getBranchId();
        $data['product_id'] = $object->getProductId();
        if ($object->isInitialized('relatedIds') && null !== $object->getRelatedIds()) {
            $values = [];
            foreach ($object->getRelatedIds() as $value) {
                $values[] = $value;
            }
            $data['related_ids'] = $values;
        }
        $data['customer_phone'] = $object->getCustomerPhone();
        $data['customer_first_name'] = $object->getCustomerFirstName();
        if ($object->isInitialized('customerEmail') && null !== $object->getCustomerEmail()) {
            $data['customer_email'] = $object->getCustomerEmail();
        }
        if ($object->isInitialized('bookingComment') && null !== $object->getBookingComment()) {
            $data['booking_comment'] = $object->getBookingComment();
        }
        if ($object->isInitialized('bookingCallback') && null !== $object->getBookingCallback()) {
            $data['booking_callback'] = $object->getBookingCallback();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsCompanyCompanySlugBookPostBody' => false];
    }
}
