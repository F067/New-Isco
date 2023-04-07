<?php

class ITC {
    private string $id;
    private string $lastName;
    private string $firstName;
    private int $quoteNumber;
    private array $quotes;

    public function __construct(string $id, string $lastName, string $firstName, int $quoteNumber) {
        $this->id = $id;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->quoteNumber = $quoteNumber;
        $this->quotes = [];
    }

    public function getId(): string {
        return $this->id;
    }

    public function setId(string $id): void {
        $this->id = $id;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function getQuoteNumber(): int {
        return $this->quoteNumber;
    }

    public function setQuoteNumber(int $quoteNumber): void {
        $this->quoteNumber = $quoteNumber;
    }

    // relation avec Quote
    public function addQuote(Quote $quote): void {
        $this->quotes[] = $quote;
    }

    public function getQuotes(): array {
        return $this->quotes;
    }
}

$itc = new ITC('123', 'Chelle', 'Jean-Mi', 1);


echo "ID : " . $itc->getId() . "<br>";
echo "Nom : " . $itc->getLastName() . "<br>";
echo "Prénom : " . $itc->getFirstName() . "<br>";
echo "Numéro de devis : " . $itc->getQuoteNumber() . "<br>";
echo "<br>";