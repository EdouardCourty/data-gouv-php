<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class FindBySiretTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Quota d\'interrogations de l\'API dépassé');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}