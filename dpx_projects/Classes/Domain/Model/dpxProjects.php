<?php
namespace Vendor\Projects\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Project extends AbstractEntity
{
    protected $title = '';
    protected $description = '';
    protected $status = ['in progress', 'submitted', 'won'];
    protected $image = '';


    public function __construct($title = '', $description = '', $status = ['in progress', 'submitted', 'won'], $image = '')
    {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setStatus($status);
        $this->setImage($image);
    }
    // Getters and setters

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

    }
}
