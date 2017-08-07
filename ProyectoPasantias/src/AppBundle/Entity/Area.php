<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Area
 *
 * @ORM\Table(name="area")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AreaRepository")
 */
class Area
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
     * @return Area
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /***********************************************************************RelacionesOneToMany****************************** Un area pertenece a varios vacante*********************************************************************************************************/

    /**
     *@ORM\OneToMany(targetEntity="Vacante", mappedBy="area")
     */
    private $vacante;

    /**
     *Get vacante
     *
     *@return \Doctrine\Common\Collections\Collection
     */
    public function getVacante()
    {
        return $this->vacante;
    }

    /**
    *Constructores
    */
    public function __construct2()
    {
        $this->vacante=new ArrayColection();
    }


    /**************************************************************************************************************************************************************************************************************************/


    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}

