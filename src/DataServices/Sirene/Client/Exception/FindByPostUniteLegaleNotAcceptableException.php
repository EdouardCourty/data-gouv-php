<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class FindByPostUniteLegaleNotAcceptableException extends NotAcceptableException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Le paramètre \'Accept\' de l\'en-tête HTTP contient une valeur non prévue');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}