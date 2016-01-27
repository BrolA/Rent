<?php

namespace RentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="DataDodania", type="date")
     */
    private $dataDodania;

    /**
     * @var string
     *
     * @ORM\Column(name="Opinia", type="string", length=255)
     */
    private $opinia;

    /**
     * @var string
     *
     * @ORM\Column(name="Car", type="string", length=255)
     */
    private $car;


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
}

