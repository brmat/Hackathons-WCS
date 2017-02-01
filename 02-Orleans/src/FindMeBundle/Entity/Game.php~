<?php

namespace FindMeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


class Game
{
    public $file;

    protected function getUploadDir()
    {
        return 'uploads/photo';
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../web/' . $this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->photo ? null : $this->getUploadDir() . '/' . $this->photo;
    }

    public function getAbsolutePath()
    {
        return null === $this->photo ? null : $this->getUploadRootDir() . '/' . $this->photo;
    }

    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->photo = uniqid() . '.' . $this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->photo);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    // generate code
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $indice;

    /**
     * @var \FindMeBundle\Entity\User
     */
    private $winner;

    /**
     * @var \FindMeBundle\Entity\User
     */
    private $author;

    /**
     * @var \FindMeBundle\Entity\Level
     */
    private $level;


    /**
     * @var string
     */
    private $photo;



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
     * Set name
     *
     * @param string $name
     *
     * @return Game
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set indice
     *
     * @param string $indice
     *
     * @return Game
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get indice
     *
     * @return string
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set winner
     *
     * @param \FindMeBundle\Entity\User $winner
     *
     * @return Game
     */
    public function setWinner(\FindMeBundle\Entity\User $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return \FindMeBundle\Entity\User
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set author
     *
     * @param \FindMeBundle\Entity\User $author
     *
     * @return Game
     */
    public function setAuthor(\FindMeBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \FindMeBundle\Entity\User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set level
     *
     * @param \FindMeBundle\Entity\Level $level
     *
     * @return Game
     */
    public function setLevel(\FindMeBundle\Entity\Level $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \FindMeBundle\Entity\Level
     */
    public function getLevel()
    {
        return $this->level;
    }


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Game
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $imageSends;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->imageSends = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add imageSend
     *
     * @param \FindMeBundle\Entity\ImageSend $imageSend
     *
     * @return Game
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
