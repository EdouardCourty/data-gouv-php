<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Exception;

class GetNearPointBadRequestException extends BadRequestException
{
    /**
     * @var \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\NearPointGetResponse400
     */
    private $nearPointGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\NearPointGetResponse400 $nearPointGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Requête incorrecte.');
        $this->nearPointGetResponse400 = $nearPointGetResponse400;
        $this->response = $response;
    }
    public function getNearPointGetResponse400(): \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\NearPointGetResponse400
    {
        return $this->nearPointGetResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}