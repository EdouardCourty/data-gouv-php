<?php

declare(strict_types=1);

use Ecourty\DataGouv\Generator\SpecPatcher\CompositePatcher;
use Ecourty\DataGouv\Generator\SpecPatcher\MissingOperationMetadataPatcher;
use Ecourty\DataGouv\Generator\SpecPatcher\NullablePropertyPatcher;

/**
 * Patch for the API Géo (YAML, Swagger 2.0).
 *
 * Two fixes are needed:
 * 1. `MissingOperationMetadataPatcher` — the spec has no `operationId` or `tags` on any path.
 *    Both are derived from the URL path dynamically:
 *      GET /communes           → operationId: getCommunes,            tag: Communes
 *      GET /communes/{code}    → operationId: getCommunesByCode,      tag: Communes
 *      GET /epcis/{code}/communes → operationId: getEpcisByCodeCommunes, tag: Epcis
 *      … (all 13 paths handled the same way, no hardcoded list)
 *
 * 2. `NullablePropertyPatcher` — marks every non-required scalar property as x-nullable
 *    so Jane PHP generates nullable getters, avoiding type errors when the API omits fields.
 */
return new CompositePatcher(
    new MissingOperationMetadataPatcher(defaultTag: 'Geo'),
    new NullablePropertyPatcher(),
);
