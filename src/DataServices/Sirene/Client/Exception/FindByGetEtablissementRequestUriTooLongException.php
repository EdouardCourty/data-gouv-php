<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class FindByGetEtablissementRequestUriTooLongException extends RequestUriTooLongException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Requête trop longue');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}