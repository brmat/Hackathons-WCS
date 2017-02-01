<?php

namespace FindMeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
/*        $this->winners = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clusters = new \Doctrine\Common\Collections\ArrayCollection();*/
        parent::__construct();
    }


/*    GENERATED CODE*/



    /**
     * @var integer
     */
    private $points;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $winners;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $authors;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $clusters;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $games;


    /**
     * Set points
     *
     * @param integer $points
     *
     * @return User
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Add winner
     *
     * @param \FindMeBundle\Entity\Game $winner
     *
     * @return User
     */
    public function addWinner(\FindMeBundle\Entity\Game $winner)
    {
        $this->winners[] = $winner;

        return $this;
    }

    /**
     * Remove winner
     *
     * @param \FindMeBundle\Entity\Game $winner
     */
    public function removeWinner(\FindMeBundle\Entity\Game $winner)
    {
        $this->winners->removeElement($winner);
    }

    /**
     * Get winners
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWinners()
    {
        return $this->winners;
    }

    /**
     * Add author
     *
     * @param \FindMeBundle\Entity\Game $author
     *
     * @return User
     */
    public function addAuthor(\FindMeBundle\Entity\Game $author)
    {
        $this->authors[] = $author;

        return $this;
    }

    /**
     * Remove author
     *
     * @param \FindMeBundle\Entity\Game $author
     */
    public function removeAuthor(\FindMeBundle\Entity\Game $author)
    {
        $this->authors->removeElement($author);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Add cluster
     *
     * @param \FindMeBundle\Entity\Cluster $cluster
     *
     * @return User
     */
    public function addCluster(\FindMeBundle\Entity\Cluster $cluster)
    {
        $this->clusters[] = $cluster;

        return $this;
    }

    /**
     * Remove cluster
     *
     * @param \FindMeBundle\Entity\Cluster $cluster
     */
    public function removeCluster(\FindMeBundle\Entity\Cluster $cluster)
    {
        $this->clusters->removeElement($cluster);
    }

    /**
     * Get clusters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClusters()
    {
        return $this->clusters;
    }



    /**
     * Add game
     *
     * @param \FindMeBundle\Entity\Game $game
     *
     * @return User
     */
    public function addGame(\FindMeBundle\Entity\Game $game)
    {
        $this->games[] = $game;

        return $this;
    }

    /**
     * Remove game
     *
     * @param \FindMeBundle\Entity\Game $game
     */
    public function removeGame(\FindMeBundle\Entity\Game $game)
    {
        $this->games->removeElement($game);
    }

    /**
     * Get games
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGames()
    {
        return $this->games;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $imageSends;


    /**
     * Add imageSend
     *
     * @param \FindMeBundle\Entity\ImageSend $imageSend
     *
     * @return User
     */
    public function addImageSend(\FindMeBundle\Entity\ImageSend $imageSend)
    {
        $this->imageSends[] = $imageSend;

        return $this;
    }

    /**
     * Remove imageSend
     *
     * @param \FindMeBundle\Entity\ImageSend $imageSend
     */
    public function removeImageSend(\FindMeBundle\Entity\ImageSend $imageSend)
    {
        $this->imageSends->removeElement($imageSend);
    }

    /**
     * Get imageSends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImageSends()
    {
        return $this->imageSends;
    }
}
