<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity
 */
class Provincia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="provincia_gid_seq", allocationSize=1, initialValue=1)
     */
    private $gid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_prov", type="integer", nullable=true)
     */
    private $idProv;

    /**
     * @var string
     *
     * @ORM\Column(name="nombr_prov", type="text", nullable=true)
     */
    private $nombrProv;



    /**
     * Get gid
     *
     * @return integer 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set idProv
     *
     * @param integer $idProv
     * @return Provincia
     */
    public function setIdProv($idProv)
    {
        $this->idProv = $idProv;

        return $this;
    }

    /**
     * Get idProv
     *
     * @return integer 
     */
    public function getIdProv()
    {
        return $this->idProv;
    }

    /**
     * Set nombrProv
     *
     * @param string $nombrProv
     * @return Provincia
     */
    public function setNombrProv($nombrProv)
    {
        $this->nombrProv = $nombrProv;

        return $this;
    }

    /**
     * Get nombrProv
     *
     * @return string 
     */
    public function getNombrProv()
    {
        return $this->nombrProv;
    }
}
