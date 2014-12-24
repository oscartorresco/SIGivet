<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="usuario_correo_usuario_key", columns={"correo_usuario"}), @ORM\UniqueConstraint(name="usuario_contrasena_usuario_key", columns={"contrasena_usuario"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="identificacion_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuario_identificacion_usuario_seq", allocationSize=1, initialValue=1)
     */
    private $identificacionUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_usuario", type="string", length=30, nullable=false)
     */
    private $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_usuario", type="string", length=30, nullable=false)
     */
    private $correoUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena_usuario", type="string", length=30, nullable=false)
     */
    private $contrasenaUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="rol_usuario", type="integer", nullable=false)
     */
    private $rolUsuario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_usuario", type="boolean", nullable=false)
     */
    private $estadoUsuario;



    /**
     * Get identificacionUsuario
     *
     * @return integer 
     */
    public function getIdentificacionUsuario()
    {
        return $this->identificacionUsuario;
    }

    /**
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string 
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set correoUsuario
     *
     * @param string $correoUsuario
     * @return Usuario
     */
    public function setCorreoUsuario($correoUsuario)
    {
        $this->correoUsuario = $correoUsuario;

        return $this;
    }

    /**
     * Get correoUsuario
     *
     * @return string 
     */
    public function getCorreoUsuario()
    {
        return $this->correoUsuario;
    }

    /**
     * Set contrasenaUsuario
     *
     * @param string $contrasenaUsuario
     * @return Usuario
     */
    public function setContrasenaUsuario($contrasenaUsuario)
    {
        $this->contrasenaUsuario = $contrasenaUsuario;

        return $this;
    }

    /**
     * Get contrasenaUsuario
     *
     * @return string 
     */
    public function getContrasenaUsuario()
    {
        return $this->contrasenaUsuario;
    }

    /**
     * Set rolUsuario
     *
     * @param integer $rolUsuario
     * @return Usuario
     */
    public function setRolUsuario($rolUsuario)
    {
        $this->rolUsuario = $rolUsuario;

        return $this;
    }

    /**
     * Get rolUsuario
     *
     * @return integer 
     */
    public function getRolUsuario()
    {
        return $this->rolUsuario;
    }

    /**
     * Set estadoUsuario
     *
     * @param boolean $estadoUsuario
     * @return Usuario
     */
    public function setEstadoUsuario($estadoUsuario)
    {
        $this->estadoUsuario = $estadoUsuario;

        return $this;
    }

    /**
     * Get estadoUsuario
     *
     * @return boolean 
     */
    public function getEstadoUsuario()
    {
        return $this->estadoUsuario;
    }
}
