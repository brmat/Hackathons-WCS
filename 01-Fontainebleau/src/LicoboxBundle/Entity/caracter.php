<?php

namespace LicoboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * caracter
 */
class caracter
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $eyes;

    /**
     * @var string
     */
    private $coat;

    /**
     * @var string
     */
    private $corn;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set eyes
     *
     * @param string $eyes
     * @return caracter
     */
    public function setEyes($eyes)
    {
        $this->eyes = $eyes;

        return $this;
    }

    /**
     * Get eyes
     *
     * @return string 
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * Set coat
     *
     * @param string $coat
     * @return caracter
     */
    public function setCoat($coat)
    {
        $this->coat = $coat;

        return $this;
    }

    /**
     * Get coat
     *
     * @return string 
     */
    public function getCoat()
    {
        return $this->coat;
    }

    /**
     * Set corn
     *
     * @param string $corn
     * @return caracter
     */
    public function setCorn($corn)
    {
        $this->corn = $corn;

        return $this;
    }

    /**
     * Get corn
     *
     * @return string 
     */
    public function getCorn()
    {
        return $this->corn;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return caracter
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @var \LicoboxBundle\Entity\name
     */
    private $shipping;


    /**
     * Set shipping
     *
     * @param \LicoboxBundle\Entity\name $shipping
     * @return caracter
     */
    public function setShipping(\LicoboxBundle\Entity\name $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping
     *
     * @return \LicoboxBundle\Entity\name 
     */
    public function getShipping()
    {
        return $this->shipping;
    }
}
