<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sintoma
 *
 * @ORM\Table(name="sintoma")
 * @ORM\Entity
 */
class Sintoma
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sintoma", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sintoma_id_sintoma_seq", allocationSize=1, initialValue=1)
     */
    private $idSintoma;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_sintoma", type="string", length=100, nullable=false)
     */
    private $nombreSintoma;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_sintoma", type="boolean", nullable=false)
     */
    private $estadoSintoma;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Animal", inversedBy="idSintoma")
     * @ORM\JoinTable(name="aborto_animal",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_sintoma", referencedColumnName="id_sintoma")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_animal", referencedColumnName="id_animal")
     *   }
     * )
     */
    private $idAnimal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Estudio", inversedBy="idSintoma")
     * @ORM\JoinTable(name="presencia_sintoma",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_sintoma", referencedColumnName="id_sintoma")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_estudio", referencedColumnName="id_estudio")
     *   }
     * )
     */
    private $idEstudio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAnimal = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idEstudio = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idSintoma
     *
     * @return integer 
     */
    public function getIdSintoma()
    {
        return $this->idSintoma;
    }

    /**
     * Set nombreSintoma
     *
     * @param string $nombreSintoma
     * @return Sintoma
     */
    public function setNombreSintoma($nombreSintoma)
    {
        $this->nombreSintoma = $nombreSintoma;

        return $this;
    }

    /**
     * Get nombreSintoma
     *
     * @return string 
     */
    public function getNombreSintoma()
    {
        return $this->nombreSintoma;
    }

    /**
     * Set estadoSintoma
     *
     * @param boolean $estadoSintoma
     * @return Sintoma
     */
    public function setEstadoSintoma($estadoSintoma)
    {
        $this->estadoSintoma = $estadoSintoma;

        return $this;
    }

    /**
     * Get estadoSintoma
     *
     * @return boolean 
     */
    public function getEstadoSintoma()
    {
        return $this->estadoSintoma;
    }

    /**
     * Add idAnimal
     *
     * @param \SIGivetBundle\Entity\Animal $idAnimal
     * @return Sintoma
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

    /**
     * Add idEstudio
     *
     * @param \SIGivetBundle\Entity\Estudio $idEstudio
     * @return Sintoma
     */
    public function addIdEstudio(\SIGivetBundle\Entity\Estudio $idEstudio)
    {
        $this->idEstudio[] = $idEstudio;

        return $this;
    }

    /**
     * Remove idEstudio
     *
     * @param \SIGivetBundle\Entity\Estudio $idEstudio
     */
    public function removeIdEstudio(\SIGivetBundle\Entity\Estudio $idEstudio)
    {
        $this->idEstudio->removeElement($idEstudio);
    }

    /**
     * Get idEstudio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEstudio()
    {
        return $this->idEstudio;
    }
}
