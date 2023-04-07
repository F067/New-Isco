<?php

class Quote
{
    private int $id;
    private string $name;
    private string $type;
    private int $num_devis;
    private string $num_affaire;
    private string $status;
    private string $offer;
    private array $services;

    public function __construct(int $id, string $name, string $type, int $num_devis, string $num_affaire, string $status, string $offer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->num_devis = $num_devis;
        $this->num_affaire = $num_affaire;
        $this->status = $status;
        $this->offer = $offer;
        $this->services = [];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
    public function getNum_devis(): string
    {
        return $this->num_devis;
    }

    public function setNum_devis(int $num_devis): void
    {
        $this->num_devis = $num_devis;
    }

    public function getNum_affaire(): string
    {
        return $this->num_affaire;
    }

    public function setNum_affaire(string $num_affaire): void
    {
        $this->num_affaire = $num_affaire;
    }

    public function getStatus(): string
    {
        return $this->num_affaire;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function offer(): string
    {
        return $this->offer;
    }

    public function setOffer(string $offer): void
    {
        $this->offer = $offer;
    }


    // relation avec la classe Service
    public function addService(Service $service): void
    {
        $this->services[] = $service;
    }

    public function getServices(): array
    {
        return $this->services;
    }
}

$Quote = new Quote(1, 'devis1', 'Création', 2344, 'sdfqf', 'status', 'Client1');
var_dump($Quote);