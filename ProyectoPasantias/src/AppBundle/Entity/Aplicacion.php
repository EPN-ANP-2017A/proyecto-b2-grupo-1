<?php

namespace AppBundle\Entity;

use AppBundle\AppBundle;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Aplicacion
 *
 * @ORM\Table(name="aplicacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AplicacionRepository")
 */
class Aplicacion
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
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /*******************************************************************************Relacion ManyToOne*********************** ********************Varias aplicaciones pertenecen a una vacante*********************************************************************************/

    /**
     *@ORM\ManyToOne(targetEntity="Vacante", inversedBy="aplicacion")
     *@ORM\JoinColumn(name="vacante_id", referencedColumnName="id")
     */
    private $vacante;

    /**
     *Get vacante
     *
     *@return \AppBundle\Entity\Vacante
     */
    public function getVacante()
    {
        return $this->vacante;
    }

    /**
     *Set vacante
     *
     *@param \AppBundle\Entity\Vacante $vacante
     *
     *@return Vacante
     */
    public function setVacante(\AppBundle\Entity\Vacante $vacante)
    {
        $this->vacante=$vacante;
        return $this;
    }


    /**************************************************************************************************************************************************************************************************************************/


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
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Aplicacion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return bool
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Aplicacion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}

