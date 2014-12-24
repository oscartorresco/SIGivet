<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PReproductivoAnimal
 *
 * @ORM\Table(name="p_reproductivo_animal", uniqueConstraints={@ORM\UniqueConstraint(name="reproductivo_animal_pk", columns={"id_p_reproductivo_animal"})}, indexes={@ORM\Index(name="r58_fk", columns={"id_unidad"})})
 * @ORM\Entity
 */
class PReproductivoAnimal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_p_reproductivo_animal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="p_reproductivo_animal_id_p_reproductivo_animal_seq", allocationSize=1, initialValue=1)
     */
    private $idPReproductivoAnimal;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_reproductivo_animal", type="string", length=100, nullable=false)
     */
    private $nombreReproductivoAnimal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_reproductivo_animal", type="boolean", nullable=false)
     */
    private $estadoReproductivoAnimal;

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
     * @ORM\ManyToMany(targetEntity="Animal", inversedBy="idPReproductivoAnimal")
     * @ORM\JoinTable(name="reproduccion_animal",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_p_reproductivo_animal", referencedColumnName="id_p_reproductivo_animal")
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
     * Get idPReproductivoAnimal
     *
     * @return integer 
     */
    public function getIdPReproductivoAnimal()
    {
        return $this->idPReproductivoAnimal;
    }

    /**
     * Set nombreReproductivoAnimal
     *
     * @param string $nombreReproductivoAnimal
     * @return PReproductivoAnimal
     */
    public function setNombreReproductivoAnimal($nombreReproductivoAnimal)
    {
        $this->nombreReproductivoAnimal = $nombreReproductivoAnimal;

        return $this;
    }

    /**
     * Get nombreReproductivoAnimal
     *
     * @return string 
     */
    public function getNombreReproductivoAnimal()
    {
        return $this->nombreReproductivoAnimal;
    }

    /**
     * Set estadoReproductivoAnimal
     *
     * @param boolean $estadoReproductivoAnimal
     * @return PReproductivoAnimal
     */
    public function setEstadoReproductivoAnimal($estadoReproductivoAnimal)
    {
        $this->estadoReproductivoAnimal = $estadoReproductivoAnimal;

        return $this;
    }

    /**
     * Get estadoReproductivoAnimal
     *
     * @return boolean 
     */
    public function getEstadoReproductivoAnimal()
    {
        return $this->estadoReproductivoAnimal;
    }

    /**
     * Set idUnidad
     *
     * @param \SIGivetBundle\Entity\UnidadTiempo $idUnidad
     * @return PReproductivoAnimal
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
     * @return PReproductivoAnimal
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
