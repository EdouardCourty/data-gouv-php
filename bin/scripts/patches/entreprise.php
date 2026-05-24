<?php

declare(strict_types=1);

use Ecourty\DataGouv\Generator\SpecPatcher\CompositePatcher;
use Ecourty\DataGouv\Generator\SpecPatcher\MissingOperationMetadataPatcher;
use Ecourty\DataGouv\Generator\SpecPatcher\NullablePropertyPatcher;

/**
 * Patch for the Recherche d'entreprises API (JSON, OpenAPI 3.0).
 *
 * Two fixes are needed:
 * 1. `MissingOperationMetadataPatcher` — the spec has no `operationId` or `tags` on any path.
 *    Both are derived from the URL path dynamically:
 *      GET /search     → operationId: getSearch,    tag: Search
 *      GET /near_point → operationId: getNearPoint,  tag: NearPoint
 *
 * 2. `NullablePropertyPatcher` — marks every non-required scalar property as x-nullable
 *    so Jane PHP generates nullable getters, avoiding type errors when the API omits fields
 *    (e.g. Siege::setDernierNumeroVoie() receives null for optional address fields).
 */
return new CompositePatcher(
    new MissingOperationMetadataPatcher(defaultTag: 'Entreprise'),
    new NullablePropertyPatcher(),
);
