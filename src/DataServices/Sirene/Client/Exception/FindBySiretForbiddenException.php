<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class FindBySiretForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Droits insuffisants pour consulter les données de cette unité');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}