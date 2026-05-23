<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Exception;

class GetCommunesByCodeNotFoundException extends NotFoundException
{
    /**
     * @var \Ecourty\DataGouv\DataServices\Geo\Client\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Ecourty\DataGouv\DataServices\Geo\Client\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Commune introuvable');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError(): \Ecourty\DataGouv\DataServices\Geo\Client\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}