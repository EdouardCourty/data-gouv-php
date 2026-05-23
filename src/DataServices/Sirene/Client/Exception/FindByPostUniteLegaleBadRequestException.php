<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class FindByPostUniteLegaleBadRequestException extends BadRequestException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Nombre incorrect de paramètres ou les paramètres sont mal formatés');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}