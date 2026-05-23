<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception;

class PostAsyncProjectsByProjectIdAbortForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Action interdite (le projet n\'est pas en cours ou en attente)');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}