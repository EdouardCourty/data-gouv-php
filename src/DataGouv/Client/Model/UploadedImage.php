<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class UploadedImage
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $image;
    /**
     * Whether the upload succeeded or not.
     *
     * @var bool|null
     */
    protected $success = true;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;

        return $this;
    }

    /**
     * Whether the upload succeeded or not.
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * Whether the upload succeeded or not.
     */
    public function setSuccess(?bool $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;

        return $this;
    }
}
