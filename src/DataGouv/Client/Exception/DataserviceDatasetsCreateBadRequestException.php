<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class DataserviceDatasetsCreateBadRequestException extends BadRequestException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Malformed object id(s) in request');
        $this->response = $response;
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
