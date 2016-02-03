<?php

namespace RentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Opinion
 *
 * @ORM\Table(name="opinion")
 * @ORM\Entity(repositoryClass="RentBundle\Repository\OpinionRepository")
 */
class Opinion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Tytul", type="string", length=255)
     */
    private $tytul;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataDodania", type="datetime")
     */
    private $dataDodania;

    /**
     * @var string
     *
     * @ORM\Column(name="Opinia", type="string", length=255)
     */
    private $opinia;

    /**
     * 
     *
     * @ORM\OneToOne(targetEntity="Car", mappedBy="opinion")
     */
    protected $car;

     public function __construct()
    {
        $this->car = new ArrayCollection();
    }

    /**
     * 
     *
     * @ORM\OneToOne(targetEntity="Client", mappedBy="opinion")
     */
    protected $client;
/*
     public function __construct()
    {
        $this->client = new ArrayCollection();
    }
*/

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
     * Set tytul
     *
     * @param string $tytul
     *
     * @return Opinion
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }

    /**
     * Get tytul
     *
     * @return string
     */
    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * Set dataDodania
     *
     * @param \DateTime $dataDodania
     *
     * @return Opinion
     */
    public function setDataDodania($dataDodania)
    {
        $this->dataDodania = $dataDodania;

        return $this;
    }

    /**
     * Get dataDodania
     *
     * @return \DateTime
     */
    public function getDataDodania()
    {
        return $this->dataDodania;
    }

    /**
     * Set opinia
     *
     * @param string $opinia
     *
     * @return Opinion
     */
    public function setOpinia($opinia)
    {
        $this->opinia = $opinia;

        return $this;
    }

    /**
     * Get opinia
     *
     * @return string
     */
    public function getOpinia()
    {
        return $this->opinia;
    }

    /**
     * Set car
     *
     * @param string $car
     *
     * @return Opinion
     */
    public function setCar($car)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return string
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Opinion
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }
}

