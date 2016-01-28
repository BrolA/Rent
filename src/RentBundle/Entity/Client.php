<?php

namespace RentBundle\Entity;

use FOS\RentBundle\Entity\Client as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="RentBundle\Repository\ClientRepository")
 */
class Client extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Imie", type="string", length=255)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwisko", type="string", length=255)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="Rents", type="string", length=255)
     */
    private $rents;

    /**
     * @var string
     *
     * @ORM\Column(name="Comments", type="string", length=255)
     */
    private $comments;

public function _construct(){
    parent::_construct();
}
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
     * Set imie
     *
     * @param string $imie
     *
     * @return Client
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     *
     * @return Client
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set rents
     *
     * @param string $rents
     *
     * @return Client
     */
    public function setRents($rents)
    {
        $this->rents = $rents;

        return $this;
    }

    /**
     * Get rents
     *
     * @return string
     */
    public function getRents()
    {
        return $this->rents;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Client
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }
}

