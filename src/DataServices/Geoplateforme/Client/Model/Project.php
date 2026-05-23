<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class Project
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var ProjectParams
     */
    protected $params;
    /**
     * @var Pipeline
     */
    protected $pipeline;
    /**
     * @var mixed
     */
    protected $inputFile;
    /**
     * @var mixed
     */
    protected $outputFile;
    /**
     * @var GeocodeProcessing
     */
    protected $processing;
    /**
     * Jeton permettant d'interéagir avec le projet. N'est retourné que lors de la création.
     *
     * @var string
     */
    protected $token;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return ProjectParams
     */
    public function getParams(): ProjectParams
    {
        return $this->params;
    }
    /**
     * @param ProjectParams $params
     *
     * @return self
     */
    public function setParams(ProjectParams $params): self
    {
        $this->initialized['params'] = true;
        $this->params = $params;
        return $this;
    }
    /**
     * @return Pipeline
     */
    public function getPipeline(): Pipeline
    {
        return $this->pipeline;
    }
    /**
     * @param Pipeline $pipeline
     *
     * @return self
     */
    public function setPipeline(Pipeline $pipeline): self
    {
        $this->initialized['pipeline'] = true;
        $this->pipeline = $pipeline;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getInputFile()
    {
        return $this->inputFile;
    }
    /**
     * @param mixed $inputFile
     *
     * @return self
     */
    public function setInputFile($inputFile): self
    {
        $this->initialized['inputFile'] = true;
        $this->inputFile = $inputFile;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getOutputFile()
    {
        return $this->outputFile;
    }
    /**
     * @param mixed $outputFile
     *
     * @return self
     */
    public function setOutputFile($outputFile): self
    {
        $this->initialized['outputFile'] = true;
        $this->outputFile = $outputFile;
        return $this;
    }
    /**
     * @return GeocodeProcessing
     */
    public function getProcessing(): GeocodeProcessing
    {
        return $this->processing;
    }
    /**
     * @param GeocodeProcessing $processing
     *
     * @return self
     */
    public function setProcessing(GeocodeProcessing $processing): self
    {
        $this->initialized['processing'] = true;
        $this->processing = $processing;
        return $this;
    }
    /**
     * Jeton permettant d'interéagir avec le projet. N'est retourné que lors de la création.
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * Jeton permettant d'interéagir avec le projet. N'est retourné que lors de la création.
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
}