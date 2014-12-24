<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultadoAnimal
 *
 * @ORM\Table(name="resultado_animal", indexes={@ORM\Index(name="r32_fk", columns={"id_estudio"}), @ORM\Index(name="r31_fk", columns={"id_animal"})})
 * @ORM\Entity
 */
class ResultadoAnimal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cualitativo", type="integer", nullable=false)
     */
    private $cualitativo;

    /**
     * @var string
     *
     * @ORM\Column(name="cuantitativo", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cuantitativo;

    /**
     * @var \Animal
     *
     * @ORM\ManyToOne(targetEntity="Animal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_animal", referencedColumnName="id_animal")
     * })
     */
    private $idAnimal;

    /**
     * @var \Estudio
     *
     * @ORM\ManyToOne(targetEntity="Estudio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estudio", referencedColumnName="id_estudio")
     * })
     */
    private $idEstudio;

    /**
     * @var \Variable
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Variable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_variable", referencedColumnName="id_variable")
     * })
     */
    private $idVariable;



    /**
     * Set cualitativo
     *
     * @param integer $cualitativo
     * @return ResultadoAnimal
     */
    public function setCualitativo($cualitativo)
    {
        $this->cualitativo = $cualitativo;

        return $this;
    }

    /**
     * Get cualitativo
     *
     * @return integer 
     */
    public function getCualitativo()
    {
        return $this->cualitativo;
    }

    /**
     * Set cuantitativo
     *
     * @param string $cuantitativo
     * @return ResultadoAnimal
     */
    public function setCuantitativo($cuantitativo)
    {
        $this->cuantitativo = $cuantitativo;

        return $this;
    }

    /**
     * Get cuantitativo
     *
     * @return string 
     */
    public function getCuantitativo()
    {
        return $this->cuantitativo;
    }

    /**
     * Set idAnimal
     *
     * @param \SIGivetBundle\Entity\Animal $idAnimal
     * @return ResultadoAnimal
     */
    public function setIdAnimal(\SIGivetBundle\Entity\Animal $idAnimal = null)
    {
        $this->idAnimal = $idAnimal;

        return $this;
    }

    /**
     * Get idAnimal
     *
     * @return \SIGivetBundle\Entity\Animal 
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }

    /**
     * Set idEstudio
     *
     * @param \SIGivetBundle\Entity\Estudio $idEstudio
     * @return ResultadoAnimal
     */
    public function setIdEstudio(\SIGivetBundle\Entity\Estudio $idEstudio = null)
    {
        $this->idEstudio = $idEstudio;

        return $this;
    }

    /**
     * Get idEstudio
     *
     * @return \SIGivetBundle\Entity\Estudio 
     */
    public function getIdEstudio()
    {
        return $this->idEstudio;
    }

    /**
     * Set idVariable
     *
     * @param \SIGivetBundle\Entity\Variable $idVariable
     * @return ResultadoAnimal
     */
    public function setIdVariable(\SIGivetBundle\Entity\Variable $idVariable)
    {
        $this->idVariable = $idVariable;

        return $this;
    }

    /**
     * Get idVariable
     *
     * @return \SIGivetBundle\Entity\Variable 
     */
    public function getIdVariable()
    {
        return $this->idVariable;
    }
}
