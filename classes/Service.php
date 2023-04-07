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

    /**
     * Display id
     * @param void
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }


    /**
     * Display catalogRef
     * @param void
     * @return int
     */
    public function getCatalogRef(): int
    {
        return $this->catalogRef;
    }


    /**
     * Display EANCode
     * @param void
     * @return int
     */
    public function getEANCode(): int
    {
        return $this->EANCode;
    }

    /**
     * Display constructorRef
     * @param void
     * @return string
     */
    public function getConstructorRef(): string
    {
        return $this->constructorRef;
    }

    /**
     * Display supplierName
     * @param void
     * @return string
     */
    public function getSupplierName(): string
    {
        return $this->supplierName;
    }

    /**
     * Display quantity
     * @param void
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Display totalCostPriceExcludingVAT
     * @param void
     * @return float
     */
    public function getTotalCostPriceExcludingVAT(): float
    {
        return $this->totalCostPriceExcludingVAT;
    }

    /**
     * Display coef
     * @param void
     * @return float
     */
    public function getCoef(): float
    {
        return $this->coef;
    }

    /**
     * Display totalSellingPriceExcludingVAT
     * @param void
     * @return float
     */
    public function getTotalSellingPriceExcludingVAT(): float
    {
        return $this->totalSellingPriceExcludingVAT;
    }


    /**
     * Set the value of catalogRef
     */
    public function setCatalogRef(int $catalogRef): self
    {
        $this->catalogRef = $catalogRef;
        return $this;
    }

    /**
     * Set the value of EANCode
     */
    public function setEANCode(int $EANCode): self
    {
        $this->EANCode = $EANCode;
        return $this;
    }

    /**
     * Set the value of constructorRef
     */
    public function setConstructorRef(string $constructorRef): self
    {
        $this->constructorRef = $constructorRef;
        return $this;
    }

    /**
     * Set the value of supplierName
     */
    public function setSupplierName(string $supplierName): self
    {
        $this->supplierName = $supplierName;
        return $this;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Set the value of totalCostPriceExcludingVAT
     */
    public function setTotalCostPriceExcludingVAT(float $totalCostPriceExcludingVAT): self
    {
        $this->totalCostPriceExcludingVAT = $totalCostPriceExcludingVAT;
        return $this;
    }

    /**
     * Set the value of coef
     */
    public function setCoef(float $coef): self
    {
        $this->coef = $coef;
        return $this;
    }

    /**
     * Set the value of totalSellingPriceExcludingVAT
     */
    public function setTotalSellingPriceExcludingVAT(float $totalSellingPriceExcludingVAT): self
    {
        $this->totalSellingPriceExcludingVAT = $totalSellingPriceExcludingVAT;
        return $this;
    }


}