<?php

namespace AppBundle\Entity;

use AppBundle\AppBundle;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Vacante
 *
 * @ORM\Table(name="vacante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VacanteRepository")
 */
class Vacante
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
     * @ORM\Column(name="nombre", type="string", length=80)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=80)
     */
    private $apellido;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="especialidad", type="string", length=80)
     */
    private $especialidad;

    /**
     * @var string
     *
     * @ORM\Column(name="universidad", type="string", length=80)
     */
    private $universidad;

    /*******************************************************************Relacion ManyToOne ********************************Varios vacantes pueden pertenecer a un area************************************************************************************************/

    /**
     *@ORM\ManyToOne(targetEntity="Area", inversedBy="vacante")
     *@ORM\JoinColumn(name="area_id", referencedColumnName="id")
     */
    private $area;

    /**
     *Get area
     *
     *@return \AppBundle\Entity\Area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     *Set area
     *
     *@param \AppBundle\Entity\Area $area
     *
     *@return Area
     */
    public function setArea(\AppBundle\Entity\Area $area)
    {
        $this->area=$area;
        return $this;
    }

    /**************************************************************************************************************************************************************************************************************************/


    /*******************************************************************Relacion ManyToOne ********************************Varios vacantes pueden pertenecer a una empresa************************************************************************************************/

    /**
     *@ORM\ManyToOne(targetEntity="Empresa", inversedBy="vacante")
     *@ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     */
    private $empresa;

    /**
     *Get empresa
     *
     *@return \AppBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     *Set empresa
     *
     *@param \AppBundle\Entity\Empresa $empresa
     *
     *@return Empresa
     */
    public function setEmpresa(\AppBundle\Entity\Empresa $empresa)
    {
        $this->empresa=$empresa;
        return $this;
    }

    /**************************************************************************************************************************************************************************************************************************/

    /*****************************************************************************Relacion OneToMany******************************* *********Un vacante pueden realizar varias aplicaciones*****************************************************************************/

    /**
     *@ORM\OneToMany(targetEntity="Aplicacion", mappedBy="vacante")
     */
    private $aplicacion;

    /**
     *Get aplicacion
     *
     *@return \Doctrine\Common\Collections\Collection
     */
    public function getAplicacion()
    {
        return $this->aplicacion;
    }

    /**
     *Constructores
     */
    public function __construct()
    {
        $this->aplicacion=new ArrayColection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Vacante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Vacante
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Vacante
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set especialidad
     *
     * @param string $especialidad
     *
     * @return Vacante
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     *
     * @return Vacante
     */
    public function setUniversidad($universidad)
    {
        $this->universidad = $universidad;

        return $this;
    }

    /**
     * Get universidad
     *
     * @return string
     */
    public function getUniversidad()
    {
        return $this->universidad;
    }
}

