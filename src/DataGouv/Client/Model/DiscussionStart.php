<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DiscussionStart
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
     * The content of the initial comment
     *
     * @var string
     */
    protected $comment;
    /**
     * Extras attributes as key-value pairs
     *
     * @var mixed
     */
    protected $extras;
    /**
     * Publish in the name of this organization
     *
     * @var mixed
     */
    protected $organization;
    /**
     * The discussion target object
     *
     * @var DiscussionStartSubject
     */
    protected $subject;
    /**
     * The title of the discussion to open
     *
     * @var string
     */
    protected $title;
    /**
     * The content of the initial comment
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * The content of the initial comment
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * Extras attributes as key-value pairs
     *
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
     * Extras attributes as key-value pairs
     *
     * @param mixed $extras
     *
     * @return self
     */
    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;
        return $this;
    }
    /**
     * Publish in the name of this organization
     *
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * Publish in the name of this organization
     *
     * @param mixed $organization
     *
     * @return self
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * The discussion target object
     *
     * @return DiscussionStartSubject
     */
    public function getSubject(): DiscussionStartSubject
    {
        return $this->subject;
    }
    /**
     * The discussion target object
     *
     * @param DiscussionStartSubject $subject
     *
     * @return self
     */
    public function setSubject(DiscussionStartSubject $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * The title of the discussion to open
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * The title of the discussion to open
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}