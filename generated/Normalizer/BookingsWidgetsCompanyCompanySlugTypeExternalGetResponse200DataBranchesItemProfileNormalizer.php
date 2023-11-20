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

class BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Yngc0der\EasyWeek\Api\Model\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile();
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
        if (\array_key_exists('company_type', $data) && null !== $data['company_type']) {
            $object->setCompanyType($data['company_type']);
        } elseif (\array_key_exists('company_type', $data) && null === $data['company_type']) {
            $object->setCompanyType(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $values = [];
            foreach ($data['phone'] as $value) {
                $values[] = $value;
            }
            $object->setPhone($values);
        } elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
            $object->setPhone(null);
        }
        if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
            $object->setTimezone($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
            $object->setTimezone(null);
        }
        if (\array_key_exists('locale', $data) && null !== $data['locale']) {
            $object->setLocale($data['locale']);
        } elseif (\array_key_exists('locale', $data) && null === $data['locale']) {
            $object->setLocale(null);
        }
        if (\array_key_exists('language', $data) && null !== $data['language']) {
            $object->setLanguage($data['language']);
        } elseif (\array_key_exists('language', $data) && null === $data['language']) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('industry', $data) && null !== $data['industry']) {
            $object->setIndustry($data['industry']);
        } elseif (\array_key_exists('industry', $data) && null === $data['industry']) {
            $object->setIndustry(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('instagram', $data) && null !== $data['instagram']) {
            $object->setInstagram($data['instagram']);
        } elseif (\array_key_exists('instagram', $data) && null === $data['instagram']) {
            $object->setInstagram(null);
        }
        if (\array_key_exists('facebook', $data) && null !== $data['facebook']) {
            $object->setFacebook($data['facebook']);
        } elseif (\array_key_exists('facebook', $data) && null === $data['facebook']) {
            $object->setFacebook(null);
        }
        if (\array_key_exists('whatsapp', $data) && null !== $data['whatsapp']) {
            $object->setWhatsapp($data['whatsapp']);
        } elseif (\array_key_exists('whatsapp', $data) && null === $data['whatsapp']) {
            $object->setWhatsapp(null);
        }
        if (\array_key_exists('viber', $data) && null !== $data['viber']) {
            $object->setViber($data['viber']);
        } elseif (\array_key_exists('viber', $data) && null === $data['viber']) {
            $object->setViber(null);
        }
        if (\array_key_exists('telegram', $data) && null !== $data['telegram']) {
            $object->setTelegram($data['telegram']);
        } elseif (\array_key_exists('telegram', $data) && null === $data['telegram']) {
            $object->setTelegram(null);
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
        $data['company_type'] = $object->getCompanyType();
        $data['currency'] = $object->getCurrency();
        $values = [];
        foreach ($object->getPhone() as $value) {
            $values[] = $value;
        }
        $data['phone'] = $values;
        $data['timezone'] = $object->getTimezone();
        $data['locale'] = $object->getLocale();
        $data['language'] = $object->getLanguage();
        $data['industry'] = $object->getIndustry();
        $data['description'] = $object->getDescription();
        if ($object->isInitialized('instagram') && null !== $object->getInstagram()) {
            $data['instagram'] = $object->getInstagram();
        }
        if ($object->isInitialized('facebook') && null !== $object->getFacebook()) {
            $data['facebook'] = $object->getFacebook();
        }
        if ($object->isInitialized('whatsapp') && null !== $object->getWhatsapp()) {
            $data['whatsapp'] = $object->getWhatsapp();
        }
        if ($object->isInitialized('viber') && null !== $object->getViber()) {
            $data['viber'] = $object->getViber();
        }
        if ($object->isInitialized('telegram') && null !== $object->getTelegram()) {
            $data['telegram'] = $object->getTelegram();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Yngc0der\\EasyWeek\\Api\\Model\\BookingsWidgetsCompanyCompanySlugTypeExternalGetResponse200DataBranchesItemProfile' => false];
    }
}
