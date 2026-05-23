<?php

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class EditDiscussionCommentForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Not allowed to edit this comment');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}