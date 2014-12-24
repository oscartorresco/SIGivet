<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variable
 *
 * @ORM\Table(name="variable", indexes={@ORM\Index(name="r35_fk", columns={"id_categoria"})})
 * @ORM\Entity
 */
class Variable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_variable", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="variable_id_variable_seq", allocationSize=1, initialValue=1)
     */
    private $idVariable;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_variable", type="string", length=50, nullable=false)
     */
    private $nombreVariable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_variable", type="boolean", nullable=false)
     */
    private $estadoVariable;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria", referencedColumnName="id_categoria")
     * })
     */
    private $idCategoria;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Regla", inversedBy="idVariable")
     * @ORM\JoinTable(name="resultado_regla",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_variable", referencedColumnName="id_variable")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_regla", referencedColumnName="id_regla")
     *   }
     * )
     */
    private $idRegla;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idRegla = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idVariable
     *
     * @return integer 
     */
    public function getIdVariable()
    {
        return $this->idVariable;
    }

    /**
     * Set nombreVariable
     *
     * @param string $nombreVariable
     * @return Variable
     */
    public function setNombreVariable($nombreVariable)
    {
        $this->nombreVariable = $nombreVariable;

        return $this;
    }

    /**
     * Get nombreVariable
     *
     * @return string 
     */
    public function getNombreVariable()
    {
        return $this->nombreVariable;
    }

    /**
     * Set estadoVariable
     *
     * @param boolean $estadoVariable
     * @return Variable
     */
    public function setEstadoVariable($estadoVariable)
    {
        $this->estadoVariable = $estadoVariable;

        return $this;
    }

    /**
     * Get estadoVariable
     *
     * @return boolean 
     */
    public function getEstadoVariable()
    {
        return $this->estadoVariable;
    }

    /**
     * Set idCategoria
     *
     * @param \SIGivetBundle\Entity\Categoria $idCategoria
     * @return Variable
     */
    public function setIdCategoria(\SIGivetBundle\Entity\Categoria $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \SIGivetBundle\Entity\Categoria 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Add idRegla
     *
     * @param \SIGivetBundle\Entity\Regla $idRegla
     * @return Variable
     */
    public function addIdRegla(\SIGivetBundle\Entity\Regla $idRegla)
    {
        $this->idRegla[] = $idRegla;

        return $this;
    }

    /**
     * Remove idRegla
     *
     * @param \SIGivetBundle\Entity\Regla $idRegla
     */
    public function removeIdRegla(\SIGivetBundle\Entity\Regla $idRegla)
    {
        $this->idRegla->removeElement($idRegla);
    }

    /**
     * Get idRegla
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdRegla()
    {
        return $this->idRegla;
    }
}
