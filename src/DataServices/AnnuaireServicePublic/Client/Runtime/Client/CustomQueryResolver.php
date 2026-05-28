<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}