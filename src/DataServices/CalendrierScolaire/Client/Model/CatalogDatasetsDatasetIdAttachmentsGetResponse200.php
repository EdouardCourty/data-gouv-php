<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model;

class CatalogDatasetsDatasetIdAttachmentsGetResponse200 extends \ArrayObject
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
     * @var list<Links>
     */
    protected $links;
    /**
     * @var list<Attachment>
     */
    protected $attachments;
    /**
     * @return list<Links>
     */
    public function getLinks(): array
    {
        return $this->links;
    }
    /**
     * @param list<Links> $links
     *
     * @return self
     */
    public function setLinks(array $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return list<Attachment>
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * @param list<Attachment> $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
}