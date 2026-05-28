<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

/**
 * Immutable configuration for a single API's code generation pipeline.
 *
 * Constructor parameters are individually readonly. Virtual properties (PHP 8.4
 * get-only hooks) derive computed values without any backing store.
 */
final class ApiConfig
{
    private const string NAMESPACE_ROOT = 'Ecourty\\DataGouv\\';

    public function __construct(
        /** Internal identifier, e.g. 'datagouv', 'sirene'. */
        public readonly string $name,

        /** Absolute path to the local spec file (JSON or YAML). */
        public readonly string $specLocalPath,

        /** Root namespace of the public library surface (facade + sub-clients). */
        public readonly string $libNamespace,

        /** API base URL included in the facade's BASE_URL constant. */
        public readonly string $baseUrl,

        /** Authentication strategy for this API. */
        public readonly AuthConfig $auth,
    ) {
    }

    /** Class name of the generated facade; derived from the last segment of libNamespace. */
    public string $facadeClass {
        get => substr($this->libNamespace, strrpos($this->libNamespace, '\\') + 1) . 'Client';
    }

    /** True when the spec file is YAML; derived from the specLocalPath extension. */
    public bool $specIsYaml {
        get => str_ends_with($this->specLocalPath, '.yaml') || str_ends_with($this->specLocalPath, '.yml');
    }

    /** Fully-qualified namespace of the Jane-generated Client class. */
    public string $janeNamespace {
        get => $this->libNamespace . '\\Client';
    }

    /** Absolute path to the directory where Api/ sub-clients are written. */
    public string $apiDir {
        get => $this->srcDir() . '/Api';
    }

    /** Absolute path to the generated main facade file. */
    public string $facadeFile {
        get => $this->srcDir() . '/' . $this->facadeClass . '.php';
    }

    /** Short name of the base exception class (e.g. 'DataGouvException'). */
    public string $exceptionBaseClass {
        get => substr($this->facadeClass, 0, -6) . 'Exception';
    }

    /** Namespace where the exception hierarchy lives. */
    public string $exceptionNamespace {
        get => $this->libNamespace . '\\Exception';
    }

    /** Absolute path to the directory where the Jane-generated Client/ lives. */
    public string $clientDir {
        get => $this->srcDir() . '/Client';
    }

    /** Absolute path to the directory where Exception/ files are written. */
    public string $exceptionDir {
        get => $this->srcDir() . '/Exception';
    }

    /**
     * Derives the absolute path to this API's source directory from its namespace.
     *
     * Convention: the PSR-4 autoloader maps "Ecourty\DataGouv\" → "src/", so
     * "Ecourty\DataGouv\DataServices\Sirene" → "{root}/src/DataServices/Sirene".
     */
    private function srcDir(): string
    {
        $relative = str_replace('\\', '/', str_replace(self::NAMESPACE_ROOT, '', $this->libNamespace));

        return \dirname(__DIR__, 2) . '/src/' . $relative;
    }
}
