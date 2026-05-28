<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model;

class Attachment extends \ArrayObject
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
    protected $href;
    /**
     * @var AttachmentMetas
     */
    protected $metas;
    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }
    /**
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->initialized['href'] = true;
        $this->href = $href;
        return $this;
    }
    /**
     * @return AttachmentMetas
     */
    public function getMetas(): AttachmentMetas
    {
        return $this->metas;
    }
    /**
     * @param AttachmentMetas $metas
     *
     * @return self
     */
    public function setMetas(AttachmentMetas $metas): self
    {
        $this->initialized['metas'] = true;
        $this->metas = $metas;
        return $this;
    }
}