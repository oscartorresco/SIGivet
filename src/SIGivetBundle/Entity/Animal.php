<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="animal", indexes={@ORM\Index(name="r44_fk", columns={"id_clasificacion", "id_raza"})})
 * @ORM\Entity
 */
class Animal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_animal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="animal_id_animal_seq", allocationSize=1, initialValue=1)
     */
    private $idAnimal;

    /**
     * @var string
     *
     * @ORM\Column(name="id_indivudual_animal", type="string", length=50, nullable=true)
     */
    private $idIndivudualAnimal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="genero_animal", type="boolean", nullable=false)
     */
    private $generoAnimal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento_animal", type="date", nullable=true)
     */
    private $fechaNacimientoAnimal;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_animal", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $pesoAnimal;

    /**
     * @var string
     *
     * @ORM\Column(name="condicion_corporal", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $condicionCorporal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_animal", type="boolean", nullable=false)
     */
    private $estadoAnimal;

    /**
     * @var \RazaClasificacion
     *
     * @ORM\ManyToOne(targetEntity="RazaClasificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clasificacion", referencedColumnName="id_clasificacion"),
     *   @ORM\JoinColumn(name="id_raza", referencedColumnName="id_raza")
     * })
     */
    private $idClasificacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Sintoma", mappedBy="idAnimal")
     */
    private $idSintoma;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProduccionLactea", mappedBy="idAnimal")
     */
    private $idProduccionLactea;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PReproductivoAnimal", mappedBy="idAnimal")
     */
    private $idPReproductivoAnimal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSintoma = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idProduccionLactea = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPReproductivoAnimal = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idAnimal
     *
     * @return integer 
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }

    /**
     * Set idIndivudualAnimal
     *
     * @param string $idIndivudualAnimal
     * @return Animal
     */
    public function setIdIndivudualAnimal($idIndivudualAnimal)
    {
        $this->idIndivudualAnimal = $idIndivudualAnimal;

        return $this;
    }

    /**
     * Get idIndivudualAnimal
     *
     * @return string 
     */
    public function getIdIndivudualAnimal()
    {
        return $this->idIndivudualAnimal;
    }

    /**
     * Set generoAnimal
     *
     * @param boolean $generoAnimal
     * @return Animal
     */
    public function setGeneroAnimal($generoAnimal)
    {
        $this->generoAnimal = $generoAnimal;

        return $this;
    }

    /**
     * Get generoAnimal
     *
     * @return boolean 
     */
    public function getGeneroAnimal()
    {
        return $this->generoAnimal;
    }

    /**
     * Set fechaNacimientoAnimal
     *
     * @param \DateTime $fechaNacimientoAnimal
     * @return Animal
     */
    public function setFechaNacimientoAnimal($fechaNacimientoAnimal)
    {
        $this->fechaNacimientoAnimal = $fechaNacimientoAnimal;

        return $this;
    }

    /**
     * Get fechaNacimientoAnimal
     *
     * @return \DateTime 
     */
    public function getFechaNacimientoAnimal()
    {
        return $this->fechaNacimientoAnimal;
    }

    /**
     * Set pesoAnimal
     *
     * @param string $pesoAnimal
     * @return Animal
     */
    public function setPesoAnimal($pesoAnimal)
    {
        $this->pesoAnimal = $pesoAnimal;

        return $this;
    }

    /**
     * Get pesoAnimal
     *
     * @return string 
     */
    public function getPesoAnimal()
    {
        return $this->pesoAnimal;
    }

    /**
     * Set condicionCorporal
     *
     * @param string $condicionCorporal
     * @return Animal
     */
    public function setCondicionCorporal($condicionCorporal)
    {
        $this->condicionCorporal = $condicionCorporal;

        return $this;
    }

    /**
     * Get condicionCorporal
     *
     * @return string 
     */
    public function getCondicionCorporal()
    {
        return $this->condicionCorporal;
    }

    /**
     * Set estadoAnimal
     *
     * @param boolean $estadoAnimal
     * @return Animal
     */
    public function setEstadoAnimal($estadoAnimal)
    {
        $this->estadoAnimal = $estadoAnimal;

        return $this;
    }

    /**
     * Get estadoAnimal
     *
     * @return boolean 
     */
    public function getEstadoAnimal()
    {
        return $this->estadoAnimal;
    }

    /**
     * Set idClasificacion
     *
     * @param \SIGivetBundle\Entity\RazaClasificacion $idClasificacion
     * @return Animal
     */
    public function setIdClasificacion(\SIGivetBundle\Entity\RazaClasificacion $idClasificacion = null)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return \SIGivetBundle\Entity\RazaClasificacion 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Add idSintoma
     *
     * @param \SIGivetBundle\Entity\Sintoma $idSintoma
     * @return Animal
     */
    public function addIdSintoma(\SIGivetBundle\Entity\Sintoma $idSintoma)
    {
        $this->idSintoma[] = $idSintoma;

        return $this;
    }

    /**
     * Remove idSintoma
     *
     * @param \SIGivetBundle\Entity\Sintoma $idSintoma
     */
    public function removeIdSintoma(\SIGivetBundle\Entity\Sintoma $idSintoma)
    {
        $this->idSintoma->removeElement($idSintoma);
    }

    /**
     * Get idSintoma
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdSintoma()
    {
        return $this->idSintoma;
    }

    /**
     * Add idProduccionLactea
     *
     * @param \SIGivetBundle\Entity\ProduccionLactea $idProduccionLactea
     * @return Animal
     */
    public function addIdProduccionLactea(\SIGivetBundle\Entity\ProduccionLactea $idProduccionLactea)
    {
        $this->idProduccionLactea[] = $idProduccionLactea;

        return $this;
    }

    /**
     * Remove idProduccionLactea
     *
     * @param \SIGivetBundle\Entity\ProduccionLactea $idProduccionLactea
     */
    public function removeIdProduccionLactea(\SIGivetBundle\Entity\ProduccionLactea $idProduccionLactea)
    {
        $this->idProduccionLactea->removeElement($idProduccionLactea);
    }

    /**
     * Get idProduccionLactea
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdProduccionLactea()
    {
        return $this->idProduccionLactea;
    }

    /**
     * Add idPReproductivoAnimal
     *
     * @param \SIGivetBundle\Entity\PReproductivoAnimal $idPReproductivoAnimal
     * @return Animal
     */
    public function addIdPReproductivoAnimal(\SIGivetBundle\Entity\PReproductivoAnimal $idPReproductivoAnimal)
    {
        $this->idPReproductivoAnimal[] = $idPReproductivoAnimal;

        return $this;
    }

    /**
     * Remove idPReproductivoAnimal
     *
     * @param \SIGivetBundle\Entity\PReproductivoAnimal $idPReproductivoAnimal
     */
    public function removeIdPReproductivoAnimal(\SIGivetBundle\Entity\PReproductivoAnimal $idPReproductivoAnimal)
    {
        $this->idPReproductivoAnimal->removeElement($idPReproductivoAnimal);
    }

    /**
     * Get idPReproductivoAnimal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPReproductivoAnimal()
    {
        return $this->idPReproductivoAnimal;
    }
}
