<?php

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class UpdateOrganizationForbiddenException extends ForbiddenException
{
    /**
     * @var \Ecourty\DataGouv\DataGouv\Client\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Ecourty\DataGouv\DataGouv\Client\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Error occuring when the user does not have the required permissions');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError(): \Ecourty\DataGouv\DataGouv\Client\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}