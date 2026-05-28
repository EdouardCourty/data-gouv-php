<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception;

class PutAsyncProjectsByProjectIdInputFileForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Action interdite (le projet est en cours de traitement ou terminé)');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}