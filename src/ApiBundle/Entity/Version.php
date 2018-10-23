<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package ApiBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="versions")
 */
class Version
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
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Model", inversedBy="versions")
     * @ORM\JoinColumn(name="model_id", referencedColumnName="id")
     */
    private $model;

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
     * @return Version
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
     * @return Version
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
     * Set model.
     *
     * @param \ApiBundle\Entity\Model|null $model
     *
     * @return Version
     */
    public function setModel(\ApiBundle\Entity\Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model.
     *
     * @return \ApiBundle\Entity\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }
}
