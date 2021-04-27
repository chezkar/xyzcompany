<?php

namespace XYZ\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compra
 *
 * @ORM\Table(name="compra", uniqueConstraints={@ORM\UniqueConstraint(name="compraNumero_UNIQUE", columns={"compraNumero"})}, indexes={@ORM\Index(name="fk_compra_proveedor_idx", columns={"proveedor_idproveedor"})})
 * @ORM\Entity
 */
class Compra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcompra", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompra;

    /**
     * @var string
     *
     * @ORM\Column(name="compraNumero", type="string", length=20, nullable=false)
     */
    private $compranumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="compraFecha", type="date", nullable=false)
     */
    private $comprafecha;

    /**
     * @var \XYZ\ProveedorBundle\Entity\Proveedor
     *
     * @ORM\ManyToOne(targetEntity="XYZ\ProveedorBundle\Entity\Proveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proveedor_idproveedor", referencedColumnName="idproveedor")
     * })
     */
    private $proveedorproveedor;

    /**
     * @ORM\OneToMany(targetEntity="XYZ\ProveedorBundle\Entity\DetalleCompra", mappedBy="compracompra", cascade={"persist"})
     */
    protected $detalles;



    public function __construct()
    {
        $this->detalles = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Get idcompra
     *
     * @return integer
     */
    public function getIdcompra()
    {
        return $this->idcompra;
    }

    /**
     * Set compranumero
     *
     * @param string $compranumero
     *
     * @return Compra
     */
    public function setCompranumero($compranumero)
    {
        $this->compranumero = $compranumero;

        return $this;
    }

    /**
     * Get compranumero
     *
     * @return string
     */
    public function getCompranumero()
    {
        return $this->compranumero;
    }

    /**
     * Set comprafecha
     *
     * @param \DateTime $comprafecha
     *
     * @return Compra
     */
    public function setComprafecha($comprafecha)
    {
        $this->comprafecha = $comprafecha;

        return $this;
    }

    /**
     * Get comprafecha
     *
     * @return \DateTime
     */
    public function getComprafecha()
    {
        return $this->comprafecha;
    }

    /**
     * Set proveedorproveedor
     *
     * @param \XYZ\ProveedorBundle\Entity\Proveedor $proveedorproveedor
     *
     * @return Compra
     */
    public function setProveedorproveedor(\XYZ\ProveedorBundle\Entity\Proveedor $proveedorproveedor = null)
    {
        $this->proveedorproveedor = $proveedorproveedor;

        return $this;
    }

    /**
     * Get proveedorproveedor
     *
     * @return \XYZ\ProveedorBundle\Entity\Proveedor
     */
    public function getProveedorproveedor()
    {
        return $this->proveedorproveedor;
    }

    /**
     * Add detalles
     *
     * @param \XYZ\ProveedorBundle\Entity\DetalleCompra $detalles
     * @return Compra
     */
    public function addCharge(\XYZ\ProveedorBundle\Entity\DetalleCompra $detalles)
    {
        $this->detalles[] = $detalles;

        return $this;
    }

    /**
     * Remove detalles
     *
     * @param \XYZ\ProveedorBundle\Entity\DetalleCompra $detalles
     */
    public function removeDetalle(\XYZ\ProveedorBundle\Entity\DetalleCompra $detalles)
    {
        $this->detalles->removeElement($detalles);
    }

    /**
     * Get detalles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetalles()
    {
        return $this->detalles;
    }
}
