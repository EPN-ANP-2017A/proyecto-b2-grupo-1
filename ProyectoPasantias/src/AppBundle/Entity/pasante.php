<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pasante
 *
 * @ORM\Table(name="pasante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\pasanteRepository")
 */
class pasante
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
     * @ORM\Column(name="nombre_pasante", type="string", length=50)
     */
    private $nombrePasante;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_pasante", type="string", length=50)
     */
    private $apellidoPasante;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula_pasante", type="string", length=10)
     */
    private $cedulaPasante;

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
     * @ORM\Column(name="especialidad", type="string", length=50)
     */
    private $especialidad;

    /**
     * @var string
     *
     * @ORM\Column(name="universidad", type="string", length=50)
     */
    private $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="email_pasante", type="string", length=50)
     */
    private $emailPasante;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono_pasante", type="integer")
     */
    private $telefonoPasante;

    /**
     * @var string
     *
     * @ORM\Column(name="conocimientos", type="string", length=255)
     */
    private $conocimientos;


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
     * Set nombrePasante
     *
     * @param string $nombrePasante
     *
     * @return pasante
     */
    public function setNombrePasante($nombrePasante)
    {
        $this->nombrePasante = $nombrePasante;

        return $this;
    }

    /**
     * Get nombrePasante
     *
     * @return string
     */
    public function getNombrePasante()
    {
        return $this->nombrePasante;
    }

    /**
     * Set apellidoPasante
     *
     * @param string $apellidoPasante
     *
     * @return pasante
     */
    public function setApellidoPasante($apellidoPasante)
    {
        $this->apellidoPasante = $apellidoPasante;

        return $this;
    }

    /**
     * Get apellidoPasante
     *
     * @return string
     */
    public function getApellidoPasante()
    {
        return $this->apellidoPasante;
    }

    /**
     * Set cedulaPasante
     *
     * @param string $cedulaPasante
     *
     * @return pasante
     */
    public function setCedulaPasante($cedulaPasante)
    {
        $this->cedulaPasante = $cedulaPasante;

        return $this;
    }

    /**
     * Get cedulaPasante
     *
     * @return string
     */
    public function getCedulaPasante()
    {
        return $this->cedulaPasante;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return pasante
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
     * @return pasante
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
     * Set especialidad
     *
     * @param string $especialidad
     *
     * @return pasante
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
     * @return pasante
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

    /**
     * Set emailPasante
     *
     * @param string $emailPasante
     *
     * @return pasante
     */
    public function setEmailPasante($emailPasante)
    {
        $this->emailPasante = $emailPasante;

        return $this;
    }

    /**
     * Get emailPasante
     *
     * @return string
     */
    public function getEmailPasante()
    {
        return $this->emailPasante;
    }

    /**
     * Set telefonoPasante
     *
     * @param integer $telefonoPasante
     *
     * @return pasante
     */
    public function setTelefonoPasante($telefonoPasante)
    {
        $this->telefonoPasante = $telefonoPasante;

        return $this;
    }

    /**
     * Get telefonoPasante
     *
     * @return int
     */
    public function getTelefonoPasante()
    {
        return $this->telefonoPasante;
    }

    /**
     * Set conocimientos
     *
     * @param string $conocimientos
     *
     * @return pasante
     */
    public function setConocimientos($conocimientos)
    {
        $this->conocimientos = $conocimientos;

        return $this;
    }

    /**
     * Get conocimientos
     *
     * @return string
     */
    public function getConocimientos()
    {
        return $this->conocimientos;
    }
}

