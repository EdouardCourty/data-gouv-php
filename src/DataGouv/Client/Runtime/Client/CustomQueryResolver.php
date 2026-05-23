<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;

interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}
