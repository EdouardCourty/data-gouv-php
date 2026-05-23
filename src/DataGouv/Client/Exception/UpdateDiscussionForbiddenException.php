<?php

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class UpdateDiscussionForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Not allowed to update this discussion');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}