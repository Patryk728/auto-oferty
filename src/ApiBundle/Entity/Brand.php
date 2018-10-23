<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package ApiBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="brands")
 */
class Brand
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128, unique=true)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=128, unique=true)
     * @var string
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity="ApiBundle\Entity\Model", mappedBy="brand")
     */
    private $models;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->models = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Brand
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return Brand
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add model.
     *
     * @param \ApiBundle\Entity\Model $model
     *
     * @return Brand
     */
    public function addModel(\ApiBundle\Entity\Model $model)
    {
        $this->models[] = $model;

        return $this;
    }

    /**
     * Remove model.
     *
     * @param \ApiBundle\Entity\Model $model
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeModel(\ApiBundle\Entity\Model $model)
    {
        return $this->models->removeElement($model);
    }

    /**
     * Get models.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModels()
    {
        return $this->models;
    }
}
