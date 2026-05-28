<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

/**
 * Describes how a generated facade client authenticates against its API.
 *
 * Use the named constructors rather than instantiating directly.
 * Constructor parameters are individually readonly. Virtual properties (PHP 8.4
 * get-only hooks) derive computed values without any backing store.
 */
final class AuthConfig
{
    private function __construct(
        /** Header or query-param name used to carry the credential, or null when unauthenticated. */
        public readonly ?string $key,

        /** When true the header value is prefixed with 'Bearer '. */
        public readonly bool $isBearer,

        /** When true the credential is sent as a query parameter instead of a header. */
        public readonly bool $isQueryParam,
    ) {
    }

    /** No authentication required. */
    public static function none(): self
    {
        return new self(key: null, isBearer: false, isQueryParam: false);
    }

    /** Plain API-key header (e.g. X-Api-Key: {key}). */
    public static function apiKeyHeader(string $headerName): self
    {
        return new self(key: $headerName, isBearer: false, isQueryParam: false);
    }

    /** Bearer-token header (Authorization: Bearer {token}). */
    public static function bearerHeader(string $headerName = 'Authorization'): self
    {
        return new self(key: $headerName, isBearer: true, isQueryParam: false);
    }

    /** API key passed as a query parameter (e.g. ?apikey={key}). */
    public static function queryParam(string $paramName): self
    {
        return new self(key: $paramName, isBearer: false, isQueryParam: true);
    }

    /** Name of the constructor parameter in the generated facade ('apiKey', 'bearerToken', or ''). */
    public string $paramName {
        get => match (true) {
            $this->key === null => '',
            $this->isBearer => 'bearerToken',
            default => 'apiKey',
        };
    }

    /** Name of the public constant emitted in the generated facade, or null when unauthenticated. */
    public ?string $constName {
        get => match (true) {
            $this->key === null => null,
            $this->isQueryParam => 'AUTH_QUERY_PARAM',
            default => 'AUTH_HEADER',
        };
    }
}
