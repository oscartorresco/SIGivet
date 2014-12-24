<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultadoPersona
 *
 * @ORM\Table(name="resultado_persona", uniqueConstraints={@ORM\UniqueConstraint(name="resultado_persona_pk", columns={"id_persona", "id_estudio", "id_variable"})}, indexes={@ORM\Index(name="r48_fk", columns={"id_estudio"}), @ORM\Index(name="r60_fk", columns={"id_variable"})})
 * @ORM\Entity
 */
class ResultadoPersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_persona", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultado_cualitativo", type="integer", nullable=true)
     */
    private $resultadoCualitativo;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_cuantitativo", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $resultadoCuantitativo;

    /**
     * @var \Estudio
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Estudio")
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
     * Set idPersona
     *
     * @param integer $idPersona
     * @return ResultadoPersona
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return integer 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set resultadoCualitativo
     *
     * @param integer $resultadoCualitativo
     * @return ResultadoPersona
     */
    public function setResultadoCualitativo($resultadoCualitativo)
    {
        $this->resultadoCualitativo = $resultadoCualitativo;

        return $this;
    }

    /**
     * Get resultadoCualitativo
     *
     * @return integer 
     */
    public function getResultadoCualitativo()
    {
        return $this->resultadoCualitativo;
    }

    /**
     * Set resultadoCuantitativo
     *
     * @param string $resultadoCuantitativo
     * @return ResultadoPersona
     */
    public function setResultadoCuantitativo($resultadoCuantitativo)
    {
        $this->resultadoCuantitativo = $resultadoCuantitativo;

        return $this;
    }

    /**
     * Get resultadoCuantitativo
     *
     * @return string 
     */
    public function getResultadoCuantitativo()
    {
        return $this->resultadoCuantitativo;
    }

    /**
     * Set idEstudio
     *
     * @param \SIGivetBundle\Entity\Estudio $idEstudio
     * @return ResultadoPersona
     */
    public function setIdEstudio(\SIGivetBundle\Entity\Estudio $idEstudio)
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
     * @return ResultadoPersona
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
