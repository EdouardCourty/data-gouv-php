<?php

declare(strict_types=1);

use Ecourty\DataGouv\Generator\SpecPatcher\NullablePropertyPatcher;

/**
 * Patch for the data.gouv.fr API (JSON, Swagger 2.0).
 *
 * Marks every non-required scalar property as x-nullable: true.
 * The real API often returns null for optional fields that the spec declares as
 * non-nullable strings/integers, which causes type errors in Jane-generated models.
 */
return new NullablePropertyPatcher();
