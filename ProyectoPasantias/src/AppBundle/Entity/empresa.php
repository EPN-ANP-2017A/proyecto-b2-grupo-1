<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\empresaRepository")
 */
class empresa
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
     * @ORM\Column(name="nombre_empresa", type="string", length=50)
     */
    private $nombreEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_empresa", type="string", length=50)
     */
    private $direccionEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_empresa", type="string", length=15)
     */
    private $telefonoEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_empresa", type="string", length=50)
     */
    private $usuarioEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="clave_empresa", type="string", length=254)
     */
    private $claveEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="email_empresa", type="string", length=50)
     */
    private $emailEmpresa;


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
     * Set nombreEmpresa
     *
     * @param string $nombreEmpresa
     *
     * @return empresa
     */
    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    /**
     * Get nombreEmpresa
     *
     * @return string
     */
    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    /**
     * Set direccionEmpresa
     *
     * @param string $direccionEmpresa
     *
     * @return empresa
     */
    public function setDireccionEmpresa($direccionEmpresa)
    {
        $this->direccionEmpresa = $direccionEmpresa;

        return $this;
    }

    /**
     * Get direccionEmpresa
     *
     * @return string
     */
    public function getDireccionEmpresa()
    {
        return $this->direccionEmpresa;
    }

    /**
     * Set telefonoEmpresa
     *
     * @param string $telefonoEmpresa
     *
     * @return empresa
     */
    public function setTelefonoEmpresa($telefonoEmpresa)
    {
        $this->telefonoEmpresa = $telefonoEmpresa;

        return $this;
    }

    /**
     * Get telefonoEmpresa
     *
     * @return string
     */
    public function getTelefonoEmpresa()
    {
        return $this->telefonoEmpresa;
    }

    /**
     * Set usuarioEmpresa
     *
     * @param string $usuarioEmpresa
     *
     * @return empresa
     */
    public function setUsuarioEmpresa($usuarioEmpresa)
    {
        $this->usuarioEmpresa = $usuarioEmpresa;

        return $this;
    }

    /**
     * Get usuarioEmpresa
     *
     * @return string
     */
    public function getUsuarioEmpresa()
    {
        return $this->usuarioEmpresa;
    }

    /**
     * Set claveEmpresa
     *
     * @param string $claveEmpresa
     *
     * @return empresa
     */
    public function setClaveEmpresa($claveEmpresa)
    {
        $this->claveEmpresa = $claveEmpresa;

        return $this;
    }

    /**
     * Get claveEmpresa
     *
     * @return string
     */
    public function getClaveEmpresa()
    {
        return $this->claveEmpresa;
    }

    /**
     * Set emailEmpresa
     *
     * @param string $emailEmpresa
     *
     * @return empresa
     */
    public function setEmailEmpresa($emailEmpresa)
    {
        $this->emailEmpresa = $emailEmpresa;

        return $this;
    }

    /**
     * Get emailEmpresa
     *
     * @return string
     */
    public function getEmailEmpresa()
    {
        return $this->emailEmpresa;
    }
}
