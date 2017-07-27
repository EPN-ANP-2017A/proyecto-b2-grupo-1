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
     * @var int
     *
     * @ORM\Column(name="telefono_empresa", type="integer")
     */
    private $telefonoEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="email_empresa", type="string", length=50)
     */
    private $emailEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=50)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=255)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="requerimiento", type="string", length=255)
     */
    private $requerimiento;

    /**
     * @var int
     *
     * @ORM\Column(name="ruc", type="integer", unique=true)
     */
    private $ruc;


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
     * @param integer $telefonoEmpresa
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
     * @return int
     */
    public function getTelefonoEmpresa()
    {
        return $this->telefonoEmpresa;
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

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return empresa
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return empresa
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set requerimiento
     *
     * @param string $requerimiento
     *
     * @return empresa
     */
    public function setRequerimiento($requerimiento)
    {
        $this->requerimiento = $requerimiento;

        return $this;
    }

    /**
     * Get requerimiento
     *
     * @return string
     */
    public function getRequerimiento()
    {
        return $this->requerimiento;
    }

    /**
     * Set ruc
     *
     * @param integer $ruc
     *
     * @return empresa
     */
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;

        return $this;
    }

    /**
     * Get ruc
     *
     * @return int
     */
    public function getRuc()
    {
        return $this->ruc;
    }
}

