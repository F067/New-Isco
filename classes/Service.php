<?php

/**
 * Gestion d'une categorie
 */

class Service
{

    /**
     * @var string id
     */
    private string $id;

    /**
     * @var int catalogRef
     */
    private int $catalogRef;

    /**
     * @var int EANCode
     */
    private int $EANCode;

    /**
     * @var string constructorRef
     */
    private string $constructorRef;

    /**
     * @var string supplierName
     */
    private string $supplierName;

    /**
     * @var int quantity
     */
    private int $quantity;

    /**
     * @var float totalCostPriceExcludingVAT
     */
    private float $totalCostPriceExcludingVAT;

    /**
     * @var float coef
     */
    private float $coef;

    /**
     * @var float totalSellingPriceExcludingVAT
     */
    private float $totalSellingPriceExcludingVAT;

    public function __construct($id, $catalogRef, $EANCode, $constructorRef, $supplierName, $quantity, $totalCostPriceExcludingVAT, $coef, $totalSellingPriceExcludingVAT)
    {
        $this->id = $id;
        $this->catalogRef = $catalogRef;
        $this->EANCode = $EANCode;
        $this->constructorRef = $constructorRef;
        $this->supplierName = $supplierName;
        $this->quantity = $quantity;
        $this->totalCostPriceExcludingVAT = $totalCostPriceExcludingVAT;
        $this->coef = $coef;
        $this->totalSellingPriceExcludingVAT = $totalSellingPriceExcludingVAT;

    }

    public function getId(): string
    {
        return $this->id;
    }
    public function getCatalogRef(): int
    {
        return $this->catalogRef;
    }

    public function getEANCode(): int
    {
        return $this->EANCode;
    }

    public function getConstructorRef(): string
    {
        return $this->constructorRef;
    }

    public function getSupplierName(): string
    {
        return $this->supplierName;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getTotalCostPriceExcludingVAT(): float
    {
        return $this->totalCostPriceExcludingVAT;
    }

    public function getCoef(): float
    {
        return $this->coef;
    }

    public function getTotalSellingPriceExcludingVAT(): float
    {
        return $this->totalSellingPriceExcludingVAT;
    }

    public function setCatalogRef(int $catalogRef): self
    {
        $this->catalogRef = $catalogRef;
        return $this;
    }

    public function setEANCode(int $EANCode): self
    {
        $this->EANCode = $EANCode;
        return $this;
    }

    public function setConstructorRef(string $constructorRef): self
    {
        $this->constructorRef = $constructorRef;
        return $this;
    }

    public function setSupplierName(string $supplierName): self
    {
        $this->supplierName = $supplierName;
        return $this;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setTotalCostPriceExcludingVAT(float $totalCostPriceExcludingVAT): self
    {
        $this->totalCostPriceExcludingVAT = $totalCostPriceExcludingVAT;
        return $this;
    }

    public function setCoef(float $coef): self
    {
        $this->coef = $coef;
        return $this;
    }

    public function setTotalSellingPriceExcludingVAT(float $totalSellingPriceExcludingVAT): self
    {
        $this->totalSellingPriceExcludingVAT = $totalSellingPriceExcludingVAT;
        return $this;
    }

    public function sellingPriceCalculation(float $totalCostPriceExcludingVAT, float $coef): float
    {
        $result = $totalCostPriceExcludingVAT * $coef;
        return $result;
        var_dump($result);
    }

}

$service = new Service('#1', 123, 4456, 'ref567', 'ASCOM', 2, 22.45, 1.30, 31.67);
var_dump($service);

$service->sellingPriceCalculation(22, 45, 1, 30);