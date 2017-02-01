<?php

namespace LicoboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * habitat
 */
class habitat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $habitat;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set habitat
     *
     * @param string $habitat
     * @return habitat
     */
    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return string 
     */
    public function getHabitat()
    {
        return $this->habitat;
    }
    /**
     * @var \LicoboxBundle\Entity\name
     */
    private $address;


    /**
     * Set address
     *
     * @param \LicoboxBundle\Entity\name $address
     * @return habitat
     */
    public function setAddress(\LicoboxBundle\Entity\name $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \LicoboxBundle\Entity\name 
     */
    public function getAddress()
    {
        return $this->address;
    }
}
