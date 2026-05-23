<?php

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class GetDataservicesCsvGoneException extends GoneException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Organization has been deleted');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}