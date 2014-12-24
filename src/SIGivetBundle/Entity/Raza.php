<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raza
 *
 * @ORM\Table(name="raza", uniqueConstraints={@ORM\UniqueConstraint(name="raza_pk", columns={"id_raza"})}, indexes={@ORM\Index(name="r23_fk", columns={"id_especie"})})
 * @ORM\Entity
 */
class Raza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_raza", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="raza_id_raza_seq", allocationSize=1, initialValue=1)
     */
    private $idRaza;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_raza", type="string", length=30, nullable=false)
     */
    private $nombreRaza;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_raza", type="boolean", nullable=false)
     */
    private $estadoRaza;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="Especie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_especie", referencedColumnName="id_especie")
     * })
     */
    private $idEspecie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Clasificacion", mappedBy="idRaza")
     */
    private $idClasificacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idClasificacion = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idRaza
     *
     * @return integer 
     */
    public function getIdRaza()
    {
        return $this->idRaza;
    }

    /**
     * Set nombreRaza
     *
     * @param string $nombreRaza
     * @return Raza
     */
    public function setNombreRaza($nombreRaza)
    {
        $this->nombreRaza = $nombreRaza;

        return $this;
    }

    /**
     * Get nombreRaza
     *
     * @return string 
     */
    public function getNombreRaza()
    {
        return $this->nombreRaza;
    }

    /**
     * Set estadoRaza
     *
     * @param boolean $estadoRaza
     * @return Raza
     */
    public function setEstadoRaza($estadoRaza)
    {
        $this->estadoRaza = $estadoRaza;

        return $this;
    }

    /**
     * Get estadoRaza
     *
     * @return boolean 
     */
    public function getEstadoRaza()
    {
        return $this->estadoRaza;
    }

    /**
     * Set idEspecie
     *
     * @param \SIGivetBundle\Entity\Especie $idEspecie
     * @return Raza
     */
    public function setIdEspecie(\SIGivetBundle\Entity\Especie $idEspecie = null)
    {
        $this->idEspecie = $idEspecie;

        return $this;
    }

    /**
     * Get idEspecie
     *
     * @return \SIGivetBundle\Entity\Especie 
     */
    public function getIdEspecie()
    {
        return $this->idEspecie;
    }

    /**
     * Add idClasificacion
     *
     * @param \SIGivetBundle\Entity\Clasificacion $idClasificacion
     * @return Raza
     */
    public function addIdClasificacion(\SIGivetBundle\Entity\Clasificacion $idClasificacion)
    {
        $this->idClasificacion[] = $idClasificacion;

        return $this;
    }

    /**
     * Remove idClasificacion
     *
     * @param \SIGivetBundle\Entity\Clasificacion $idClasificacion
     */
    public function removeIdClasificacion(\SIGivetBundle\Entity\Clasificacion $idClasificacion)
    {
        $this->idClasificacion->removeElement($idClasificacion);
    }

    /**
     * Get idClasificacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }
}
