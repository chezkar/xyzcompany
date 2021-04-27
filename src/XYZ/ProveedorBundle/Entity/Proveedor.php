<?php

namespace XYZ\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedor
 *
 * @ORM\Table(name="proveedor", uniqueConstraints={@ORM\UniqueConstraint(name="proveedorNit_UNIQUE", columns={"proveedorNit"})})
 * @ORM\Entity
 */
class Proveedor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idproveedor", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedorNombre", type="string", length=100, nullable=false)
     */
    private $proveedornombre;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedorNit", type="string", length=12, nullable=false)
     */
    private $proveedornit;

    /**
     * @var integer
     *
     * @ORM\Column(name="proveedorTelefono", type="integer", nullable=false)
     */
    private $proveedortelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedorDireccion", type="text", length=65535, nullable=false)
     */
    private $proveedordireccion;



    /**
     * Get idproveedor
     *
     * @return integer
     */
    public function getIdproveedor()
    {
        return $this->idproveedor;
    }

    /**
     * Set proveedornombre
     *
     * @param string $proveedornombre
     *
     * @return Proveedor
     */
    public function setProveedornombre($proveedornombre)
    {
        $this->proveedornombre = $proveedornombre;

        return $this;
    }

    /**
     * Get proveedornombre
     *
     * @return string
     */
    public function getProveedornombre()
    {
        return $this->proveedornombre;
    }

    /**
     * Set proveedornit
     *
     * @param string $proveedornit
     *
     * @return Proveedor
     */
    public function setProveedornit($proveedornit)
    {
        $this->proveedornit = $proveedornit;

        return $this;
    }

    /**
     * Get proveedornit
     *
     * @return string
     */
    public function getProveedornit()
    {
        return $this->proveedornit;
    }

    /**
     * Set proveedortelefono
     *
     * @param integer $proveedortelefono
     *
     * @return Proveedor
     */
    public function setProveedortelefono($proveedortelefono)
    {
        $this->proveedortelefono = $proveedortelefono;

        return $this;
    }

    /**
     * Get proveedortelefono
     *
     * @return integer
     */
    public function getProveedortelefono()
    {
        return $this->proveedortelefono;
    }

    /**
     * Set proveedordireccion
     *
     * @param string $proveedordireccion
     *
     * @return Proveedor
     */
    public function setProveedordireccion($proveedordireccion)
    {
        $this->proveedordireccion = $proveedordireccion;

        return $this;
    }

    /**
     * Get proveedordireccion
     *
     * @return string
     */
    public function getProveedordireccion()
    {
        return $this->proveedordireccion;
    }
}
