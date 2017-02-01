<?php

namespace FindMeBundle\Entity;

/**
 * Level
 */
class Level
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $levels;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->levels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add level
     *
     * @param \FindMeBundle\Entity\Game $level
     *
     * @return Level
     */
    public function addLevel(\FindMeBundle\Entity\Game $level)
    {
        $this->levels[] = $level;

        return $this;
    }

    /**
     * Remove level
     *
     * @param \FindMeBundle\Entity\Game $level
     */
    public function removeLevel(\FindMeBundle\Entity\Game $level)
    {
        $this->levels->removeElement($level);
    }

    /**
     * Get levels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLevels()
    {
        return $this->levels;
    }
}
