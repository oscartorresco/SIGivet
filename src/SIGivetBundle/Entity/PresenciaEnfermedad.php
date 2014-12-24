<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresenciaEnfermedad
 *
 * @ORM\Table(name="presencia_enfermedad", indexes={@ORM\Index(name="r11_fk", columns={"id_estudio"})})
 * @ORM\Entity
 */
class PresenciaEnfermedad
{
    /**
     * @var \Enfermedad
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Enfermedad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_enfermedad", referencedColumnName="id_enfermedad")
     * })
     */
    private $idEnfermedad;

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
     * Set idEnfermedad
     *
     * @param \SIGivetBundle\Entity\Enfermedad $idEnfermedad
     * @return PresenciaEnfermedad
     */
    public function setIdEnfermedad(\SIGivetBundle\Entity\Enfermedad $idEnfermedad)
    {
        $this->idEnfermedad = $idEnfermedad;

        return $this;
    }

    /**
     * Get idEnfermedad
     *
     * @return \SIGivetBundle\Entity\Enfermedad 
     */
    public function getIdEnfermedad()
    {
        return $this->idEnfermedad;
    }

    /**
     * Set idEstudio
     *
     * @param \SIGivetBundle\Entity\Estudio $idEstudio
     * @return PresenciaEnfermedad
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
}
