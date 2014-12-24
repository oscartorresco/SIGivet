<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduccionLactea
 *
 * @ORM\Table(name="produccion_lactea", uniqueConstraints={@ORM\UniqueConstraint(name="produccion_lactea_pk", columns={"id_produccion_lactea"})}, indexes={@ORM\Index(name="r59_fk", columns={"id_unidad"})})
 * @ORM\Entity
 */
class ProduccionLactea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produccion_lactea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="produccion_lactea_id_produccion_lactea_seq", allocationSize=1, initialValue=1)
     */
    private $idProduccionLactea;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_produccion_lactea", type="string", length=100, nullable=false)
     */
    private $nombreProduccionLactea;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_produccion_lactea", type="boolean", nullable=false)
     */
    private $estadoProduccionLactea;

    /**
     * @var \UnidadTiempo
     *
     * @ORM\ManyToOne(targetEntity="UnidadTiempo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidad", referencedColumnName="id_unidad")
     * })
     */
    private $idUnidad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Animal", inversedBy="idProduccionLactea")
     * @ORM\JoinTable(name="produccion_lactea_animal",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_produccion_lactea", referencedColumnName="id_produccion_lactea")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_animal", referencedColumnName="id_animal")
     *   }
     * )
     */
    private $idAnimal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAnimal = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idProduccionLactea
     *
     * @return integer 
     */
    public function getIdProduccionLactea()
    {
        return $this->idProduccionLactea;
    }

    /**
     * Set nombreProduccionLactea
     *
     * @param string $nombreProduccionLactea
     * @return ProduccionLactea
     */
    public function setNombreProduccionLactea($nombreProduccionLactea)
    {
        $this->nombreProduccionLactea = $nombreProduccionLactea;

        return $this;
    }

    /**
     * Get nombreProduccionLactea
     *
     * @return string 
     */
    public function getNombreProduccionLactea()
    {
        return $this->nombreProduccionLactea;
    }

    /**
     * Set estadoProduccionLactea
     *
     * @param boolean $estadoProduccionLactea
     * @return ProduccionLactea
     */
    public function setEstadoProduccionLactea($estadoProduccionLactea)
    {
        $this->estadoProduccionLactea = $estadoProduccionLactea;

        return $this;
    }

    /**
     * Get estadoProduccionLactea
     *
     * @return boolean 
     */
    public function getEstadoProduccionLactea()
    {
        return $this->estadoProduccionLactea;
    }

    /**
     * Set idUnidad
     *
     * @param \SIGivetBundle\Entity\UnidadTiempo $idUnidad
     * @return ProduccionLactea
     */
    public function setIdUnidad(\SIGivetBundle\Entity\UnidadTiempo $idUnidad = null)
    {
        $this->idUnidad = $idUnidad;

        return $this;
    }

    /**
     * Get idUnidad
     *
     * @return \SIGivetBundle\Entity\UnidadTiempo 
     */
    public function getIdUnidad()
    {
        return $this->idUnidad;
    }

    /**
     * Add idAnimal
     *
     * @param \SIGivetBundle\Entity\Animal $idAnimal
     * @return ProduccionLactea
     */
    public function addIdAnimal(\SIGivetBundle\Entity\Animal $idAnimal)
    {
        $this->idAnimal[] = $idAnimal;

        return $this;
    }

    /**
     * Remove idAnimal
     *
     * @param \SIGivetBundle\Entity\Animal $idAnimal
     */
    public function removeIdAnimal(\SIGivetBundle\Entity\Animal $idAnimal)
    {
        $this->idAnimal->removeElement($idAnimal);
    }

    /**
     * Get idAnimal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }
}
