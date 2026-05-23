<?php

declare(strict_types=1);

use Ecourty\DataGouv\Generator\SpecPatcher\MissingOperationMetadataPatcher;

/**
 * Patch for the Recherche d'entreprises API (JSON, OpenAPI 3.0).
 *
 * The upstream spec omits `operationId` and `tags` on all paths.
 * `MissingOperationMetadataPatcher` derives both from the path URL:
 *   GET /search     → operationId: getSearch,    tag: Search
 *   GET /near_point → operationId: getNearPoint,  tag: NearPoint
 */
return new MissingOperationMetadataPatcher(defaultTag: 'Entreprise');
