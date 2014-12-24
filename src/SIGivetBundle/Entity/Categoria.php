<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria", uniqueConstraints={@ORM\UniqueConstraint(name="categoria_pk", columns={"id_categoria"})})
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="categoria_id_categoria_seq", allocationSize=1, initialValue=1)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_categoria", type="string", length=50, nullable=false)
     */
    private $nombreCategoria;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_categoria", type="boolean", nullable=false)
     */
    private $estadoCategoria;



    /**
     * Get idCategoria
     *
     * @return integer 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     * @return Categoria
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string 
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }

    /**
     * Set estadoCategoria
     *
     * @param boolean $estadoCategoria
     * @return Categoria
     */
    public function setEstadoCategoria($estadoCategoria)
    {
        $this->estadoCategoria = $estadoCategoria;

        return $this;
    }

    /**
     * Get estadoCategoria
     *
     * @return boolean 
     */
    public function getEstadoCategoria()
    {
        return $this->estadoCategoria;
    }
}
