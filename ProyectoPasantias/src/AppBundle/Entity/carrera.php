<?php

namespace AppBundle\Entity;


use AppBundle\AppBundle;
use Doctrine\ORM\Mapping as ORM;

/**
 * carrera
 *
 * @ORM\Table(name="carrera")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\carreraRepository")
 */
class carrera
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
     * @ORM\Column(name="nombre_carrera", type="string", length=50)
     */
    private $nombreCarrera;


    /**
     * @ORM\ManyToOne(targetEntity="solicitud", inversedBy="carreras")
     * @ORM\JoinColumn(name="solicitud_id", referencedColumnName="id")
     */
    private $solicitudes;

    /**
     * Set solicitudes
     * @param \AppBundle\Entity\solicitud $solicitudes
     *
     * @return solicitud
     */
    public function setSolicitudes(\AppBundle\Entity\solicitud $solicitudes)
    {
        $this->solicitudes = $solicitudes;
        
        return $this;
    }

    /**
     * Get solicitudes
     *
     * @return \AppBundle\Entity\solicitud
     */
    public function getSolicitudes()
    {
        return $this->solicitudes;
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
     * Set nombreCarrera
     *
     * @param string $nombreCarrera
     *
     * @return carrera
     */
    public function setNombreCarrera($nombreCarrera)
    {
        $this->nombreCarrera = $nombreCarrera;

        return $this;
    }

    /**
     * Get nombreCarrera
     *
     * @return string
     */
    public function getNombreCarrera()
    {
        return $this->nombreCarrera;
    }
}

