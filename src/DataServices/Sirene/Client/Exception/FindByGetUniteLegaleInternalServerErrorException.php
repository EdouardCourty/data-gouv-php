<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class FindByGetUniteLegaleInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur
     */
    private $reponseErreur;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur $reponseErreur, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Erreur interne du serveur');
        $this->reponseErreur = $reponseErreur;
        $this->response = $response;
    }
    public function getReponseErreur(): \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur
    {
        return $this->reponseErreur;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}