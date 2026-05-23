<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class DeleteReuseGoneException extends GoneException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Reuse has been deleted');
        $this->response = $response;
    }

    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
