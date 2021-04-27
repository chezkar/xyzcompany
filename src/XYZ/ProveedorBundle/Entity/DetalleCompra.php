<?php

namespace XYZ\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleCompra
 *
 * @ORM\Table(name="detalle_compra", indexes={@ORM\Index(name="fk_detalle_compra_producto1_idx", columns={"producto_idproducto"}), @ORM\Index(name="fk_detalle_compra_compra1_idx", columns={"compra_idcompra"})})
 * @ORM\Entity
 */
class DetalleCompra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddetalle", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="detalleCantidad", type="integer", nullable=false)
     */
    private $detallecantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="detalleTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $detalletotal;

    /**
     * @var \XYZ\ProveedorBundle\Entity\Compra
     *
     * @ORM\ManyToOne(targetEntity="XYZ\ProveedorBundle\Entity\Compra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compra_idcompra", referencedColumnName="idcompra")
     * })
     */
    private $compracompra;

    /**
     * @var \XYZ\ProveedorBundle\Entity\Producto
     *
     * @ORM\ManyToOne(targetEntity="XYZ\ProveedorBundle\Entity\Producto", inversedBy="detalles", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="producto_idproducto", referencedColumnName="idproducto")
     * })
     */
    private $productoproducto;



    /**
     * Get iddetalle
     *
     * @return integer
     */
    public function getIddetalle()
    {
        return $this->iddetalle;
    }

    /**
     * Set detallecantidad
     *
     * @param integer $detallecantidad
     *
     * @return DetalleCompra
     */
    public function setDetallecantidad($detallecantidad)
    {
        $this->detallecantidad = $detallecantidad;

        return $this;
    }

    /**
     * Get detallecantidad
     *
     * @return integer
     */
    public function getDetallecantidad()
    {
        return $this->detallecantidad;
    }

    /**
     * Set detalletotal
     *
     * @param float $detalletotal
     *
     * @return DetalleCompra
     */
    public function setDetalletotal($detalletotal)
    {
        $this->detalletotal = $detalletotal;

        return $this;
    }

    /**
     * Get detalletotal
     *
     * @return float
     */
    public function getDetalletotal()
    {
        return $this->detalletotal;
    }

    /**
     * Set compracompra
     *
     * @param \XYZ\ProveedorBundle\Entity\Compra $compracompra
     *
     * @return DetalleCompra
     */
    public function setCompracompra(\XYZ\ProveedorBundle\Entity\Compra $compracompra = null)
    {
        $this->compracompra = $compracompra;

        return $this;
    }

    /**
     * Get compracompra
     *
     * @return \XYZ\ProveedorBundle\Entity\Compra
     */
    public function getCompracompra()
    {
        return $this->compracompra;
    }

    /**
     * Set productoproducto
     *
     * @param \XYZ\ProveedorBundle\Entity\Producto $productoproducto
     *
     * @return DetalleCompra
     */
    public function setProductoproducto(\XYZ\ProveedorBundle\Entity\Producto $productoproducto = null)
    {
        $this->productoproducto = $productoproducto;

        return $this;
    }

    /**
     * Get productoproducto
     *
     * @return \XYZ\ProveedorBundle\Entity\Producto
     */
    public function getProductoproducto()
    {
        return $this->productoproducto;
    }
}
