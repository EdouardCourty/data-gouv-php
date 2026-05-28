<?php

declare(strict_types=1);

use Ecourty\DataGouv\Generator\SpecPatcher\MissingOperationMetadataPatcher;

/**
 * Patch for the Jours Fériés API (YAML, OpenAPI 3.0).
 *
 * The upstream spec omits `operationId` and `tags` on all paths, and path segments
 * include a `.json` file-extension suffix (e.g. `/{zone}.json`).
 *
 * `MissingOperationMetadataPatcher` handles both:
 * - `stripSuffixes: ['.json']` normalises paths before derivation
 * - All path segments are parameters ({zone}, {annee}), so `defaultTag` is used as fallback:
 *     GET /{zone}.json         → operationId: getByZone,         tag: JoursFeries
 *     GET /{zone}/{annee}.json → operationId: getByZoneByAnnee,  tag: JoursFeries
 */
return new MissingOperationMetadataPatcher(defaultTag: 'JoursFeries', stripSuffixes: ['.json']);
