<?php

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class UploadDatasetResourceUnsupportedMediaTypeException extends UnsupportedMediaTypeException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Incorrect file content type');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}