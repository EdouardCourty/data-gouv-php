<?php

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class UpdateOrganizationBadRequestException extends BadRequestException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Validation error: your data cannot be updated for now, we have been notified of the error and we will fix it as soon as possible.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}