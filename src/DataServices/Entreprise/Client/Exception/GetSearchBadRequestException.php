<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Exception;

class GetSearchBadRequestException extends BadRequestException
{
    /**
     * @var \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\SearchGetResponse400
     */
    private $searchGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\SearchGetResponse400 $searchGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Requête incorrecte.');
        $this->searchGetResponse400 = $searchGetResponse400;
        $this->response = $response;
    }
    public function getSearchGetResponse400(): \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\SearchGetResponse400
    {
        return $this->searchGetResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}