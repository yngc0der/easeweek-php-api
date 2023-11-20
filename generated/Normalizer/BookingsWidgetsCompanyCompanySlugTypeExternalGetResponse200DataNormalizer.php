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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200Data' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200Data' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200Data();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && null === $data['url']) {
            $object->setUrl(null);
        }
        if (\array_key_exists('company', $data) && null !== $data['company']) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataCompany', 'json', $context));
        } elseif (\array_key_exists('company', $data) && null === $data['company']) {
            $object->setCompany(null);
        }
        if (\array_key_exists('config', $data) && null !== $data['config']) {
            $object->setConfig($this->denormalizer->denormalize($data['config'], 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataConfig', 'json', $context));
        } elseif (\array_key_exists('config', $data) && null === $data['config']) {
            $object->setConfig(null);
        }
        if (\array_key_exists('branches', $data) && null !== $data['branches']) {
            $values = [];
            foreach ($data['branches'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItem', 'json', $context);
            }
            $object->setBranches($values);
        } elseif (\array_key_exists('branches', $data) && null === $data['branches']) {
            $object->setBranches(null);
        }
        if (\array_key_exists('products', $data) && null !== $data['products']) {
            $values_1 = [];
            foreach ($data['products'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataProductsItem', 'json', $context);
            }
            $object->setProducts($values_1);
        } elseif (\array_key_exists('products', $data) && null === $data['products']) {
            $object->setProducts(null);
        }
        if (\array_key_exists('users', $data) && null !== $data['users']) {
            $values_2 = [];
            foreach ($data['users'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataUsersItem', 'json', $context);
            }
            $object->setUsers($values_2);
        } elseif (\array_key_exists('users', $data) && null === $data['users']) {
            $object->setUsers(null);
        }
        if (\array_key_exists('subscription', $data) && null !== $data['subscription']) {
            $object->setSubscription($data['subscription']);
        } elseif (\array_key_exists('subscription', $data) && null === $data['subscription']) {
            $object->setSubscription(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['url'] = $object->getUrl();
        $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        $values = [];
        foreach ($object->getBranches() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['branches'] = $values;
        $values_1 = [];
        foreach ($object->getProducts() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['products'] = $values_1;
        $values_2 = [];
        foreach ($object->getUsers() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['users'] = $values_2;
        $data['subscription'] = $object->getSubscription();

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200Data' => false];
    }
}
