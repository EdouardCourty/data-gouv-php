<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Normalizer;

use Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CatalogSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('consolidation_dataset_id', $data) && $data['consolidation_dataset_id'] !== null) {
            $object->setConsolidationDatasetId($data['consolidation_dataset_id']);
        } elseif (\array_key_exists('consolidation_dataset_id', $data) && $data['consolidation_dataset_id'] === null) {
            $object->setConsolidationDatasetId(null);
        }
        if (\array_key_exists('contact', $data) && $data['contact'] !== null) {
            $object->setContact($data['contact']);
        } elseif (\array_key_exists('contact', $data) && $data['contact'] === null) {
            $object->setContact(null);
        }
        if (\array_key_exists('datapackage_description', $data) && $data['datapackage_description'] !== null) {
            $object->setDatapackageDescription($data['datapackage_description']);
        } elseif (\array_key_exists('datapackage_description', $data) && $data['datapackage_description'] === null) {
            $object->setDatapackageDescription(null);
        }
        if (\array_key_exists('datapackage_name', $data) && $data['datapackage_name'] !== null) {
            $object->setDatapackageName($data['datapackage_name']);
        } elseif (\array_key_exists('datapackage_name', $data) && $data['datapackage_name'] === null) {
            $object->setDatapackageName(null);
        }
        if (\array_key_exists('datapackage_title', $data) && $data['datapackage_title'] !== null) {
            $object->setDatapackageTitle($data['datapackage_title']);
        } elseif (\array_key_exists('datapackage_title', $data) && $data['datapackage_title'] === null) {
            $object->setDatapackageTitle(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('examples', $data)) {
            $values = [];
            foreach ($data['examples'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchemaExample::class, 'json', $context);
            }
            $object->setExamples($values);
        }
        if (\array_key_exists('external_doc', $data) && $data['external_doc'] !== null) {
            $object->setExternalDoc($data['external_doc']);
        } elseif (\array_key_exists('external_doc', $data) && $data['external_doc'] === null) {
            $object->setExternalDoc(null);
        }
        if (\array_key_exists('external_tool', $data) && $data['external_tool'] !== null) {
            $object->setExternalTool($data['external_tool']);
        } elseif (\array_key_exists('external_tool', $data) && $data['external_tool'] === null) {
            $object->setExternalTool(null);
        }
        if (\array_key_exists('homepage', $data) && $data['homepage'] !== null) {
            $object->setHomepage($data['homepage']);
        } elseif (\array_key_exists('homepage', $data) && $data['homepage'] === null) {
            $object->setHomepage(null);
        }
        if (\array_key_exists('labels', $data)) {
            $values_1 = [];
            foreach ($data['labels'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLabels($values_1);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('schema_type', $data) && $data['schema_type'] !== null) {
            $object->setSchemaType($data['schema_type']);
        } elseif (\array_key_exists('schema_type', $data) && $data['schema_type'] === null) {
            $object->setSchemaType(null);
        }
        if (\array_key_exists('schema_url', $data) && $data['schema_url'] !== null) {
            $object->setSchemaUrl($data['schema_url']);
        } elseif (\array_key_exists('schema_url', $data) && $data['schema_url'] === null) {
            $object->setSchemaUrl(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('versions', $data)) {
            $values_2 = [];
            foreach ($data['versions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchemaVersion::class, 'json', $context);
            }
            $object->setVersions($values_2);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('consolidationDatasetId')) {
            $dataArray['consolidation_dataset_id'] = $data->getConsolidationDatasetId();
        }
        if ($data->isInitialized('contact')) {
            $dataArray['contact'] = $data->getContact();
        }
        if ($data->isInitialized('datapackageDescription')) {
            $dataArray['datapackage_description'] = $data->getDatapackageDescription();
        }
        if ($data->isInitialized('datapackageName')) {
            $dataArray['datapackage_name'] = $data->getDatapackageName();
        }
        if ($data->isInitialized('datapackageTitle')) {
            $dataArray['datapackage_title'] = $data->getDatapackageTitle();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('examples') && null !== $data->getExamples()) {
            $values = [];
            foreach ($data->getExamples() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['examples'] = $values;
        }
        if ($data->isInitialized('externalDoc')) {
            $dataArray['external_doc'] = $data->getExternalDoc();
        }
        if ($data->isInitialized('externalTool')) {
            $dataArray['external_tool'] = $data->getExternalTool();
        }
        if ($data->isInitialized('homepage')) {
            $dataArray['homepage'] = $data->getHomepage();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_1 = [];
            foreach ($data->getLabels() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['labels'] = $values_1;
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('schemaType')) {
            $dataArray['schema_type'] = $data->getSchemaType();
        }
        if ($data->isInitialized('schemaUrl')) {
            $dataArray['schema_url'] = $data->getSchemaUrl();
        }
        if ($data->isInitialized('title')) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('versions') && null !== $data->getVersions()) {
            $values_2 = [];
            foreach ($data->getVersions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['versions'] = $values_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema::class => false];
    }
}
