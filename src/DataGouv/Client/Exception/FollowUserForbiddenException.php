<?php

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class FollowUserForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('When trying to follow yourself');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}