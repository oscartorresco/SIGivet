<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clasificacion
 *
 * @ORM\Table(name="clasificacion", uniqueConstraints={@ORM\UniqueConstraint(name="clasificacion_pk", columns={"id_clasificacion"})}, indexes={@ORM\Index(name="r24_fk", columns={"id_especie"})})
 * @ORM\Entity
 */
class Clasificacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_clasificacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="clasificacion_id_clasificacion_seq", allocationSize=1, initialValue=1)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_clasificacion", type="string", length=50, nullable=false)
     */
    private $nombreClasificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="genero_clasificacion", type="boolean", nullable=false)
     */
    private $generoClasificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_clasificacion", type="boolean", nullable=false)
     */
    private $estadoClasificacion;

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
     * @ORM\ManyToMany(targetEntity="Raza", inversedBy="idClasificacion")
     * @ORM\JoinTable(name="raza_clasificacion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_clasificacion", referencedColumnName="id_clasificacion")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_raza", referencedColumnName="id_raza")
     *   }
     * )
     */
    private $idRaza;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idRaza = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idClasificacion
     *
     * @return integer 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set nombreClasificacion
     *
     * @param string $nombreClasificacion
     * @return Clasificacion
     */
    public function setNombreClasificacion($nombreClasificacion)
    {
        $this->nombreClasificacion = $nombreClasificacion;

        return $this;
    }

    /**
     * Get nombreClasificacion
     *
     * @return string 
     */
    public function getNombreClasificacion()
    {
        return $this->nombreClasificacion;
    }

    /**
     * Set generoClasificacion
     *
     * @param boolean $generoClasificacion
     * @return Clasificacion
     */
    public function setGeneroClasificacion($generoClasificacion)
    {
        $this->generoClasificacion = $generoClasificacion;

        return $this;
    }

    /**
     * Get generoClasificacion
     *
     * @return boolean 
     */
    public function getGeneroClasificacion()
    {
        return $this->generoClasificacion;
    }

    /**
     * Set estadoClasificacion
     *
     * @param boolean $estadoClasificacion
     * @return Clasificacion
     */
    public function setEstadoClasificacion($estadoClasificacion)
    {
        $this->estadoClasificacion = $estadoClasificacion;

        return $this;
    }

    /**
     * Get estadoClasificacion
     *
     * @return boolean 
     */
    public function getEstadoClasificacion()
    {
        return $this->estadoClasificacion;
    }

    /**
     * Set idEspecie
     *
     * @param \SIGivetBundle\Entity\Especie $idEspecie
     * @return Clasificacion
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
     * Add idRaza
     *
     * @param \SIGivetBundle\Entity\Raza $idRaza
     * @return Clasificacion
     */
    public function addIdRaza(\SIGivetBundle\Entity\Raza $idRaza)
    {
        $this->idRaza[] = $idRaza;

        return $this;
    }

    /**
     * Remove idRaza
     *
     * @param \SIGivetBundle\Entity\Raza $idRaza
     */
    public function removeIdRaza(\SIGivetBundle\Entity\Raza $idRaza)
    {
        $this->idRaza->removeElement($idRaza);
    }

    /**
     * Get idRaza
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdRaza()
    {
        return $this->idRaza;
    }
}
