<?php
include_once("Interlocuteur.php");
class Client {
    private $id;
    private $firstName;
    private $lastName;
    private $address;
    private $email;
    private $phone;
    private array $interlocuteurs;

    public function __construct($id, $firstName, $lastName, $address, $email, $phone) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->interlocuteurs = array();
    }

    public function getId() {
        // echo "ID: " . $this->id . "\n";
        return $this->id;
    }

    public function getFirstName() {
        echo "First Name: " . $this->firstName . "<br>";
        return $this->firstName;
    }

    public function getLastName() {
        echo "Last Name: " . $this->lastName . "<br>";
        return $this->lastName;
    }

    public function getAddress() {
        echo "Address: " . $this->address . "<br>";
        return $this->address;
    }

    public function getEmail() {
        echo "Email: " . $this->email . "<br>";
        return $this->email;
    }

    public function getPhone() {
        echo "Phone: " . $this->phone . "<br>";
        return $this->phone;
    }

    public function setId($id) {
        $this->id = $id;
        echo "ID set to: " . $id . "<br>";
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        echo "First Name set to: " . $firstName . "<br>";
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        echo "Last Name set to: " . $lastName . "<br>";
    }

    public function setAddress($address) {
        $this->address = $address;
        echo "Address set to: " . $address . "<br>";
    }

    public function setEmail($email) {
        $this->email = $email;
        echo "Email set to: " . $email . "<br>";
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        echo "Phone set to: " . $phone . "<br>";
    }

    public function addInterlocuteur(Interlocuteur $interlocuteur): void {
        $this->interlocuteurs[] = $interlocuteur;
    }

    public function getInterlocuteurs(): array {
        return $this->interlocuteurs;
    }
}

// $client = new Client(1, "Gregory", "Foïs", "32 Rue de la rue", "Greg@example.com", "06-06-06-06-06");

// $client->getId();
// $client->getFirstName();
// $client->getLastName();
// $client->getAddress();
// $client->getEmail();
// $client->getPhone();

// $client->setId(2);
// $client->setFirstName("Sundus");
// $client->setLastName("Al Kebsi");
// $client->setAddress("33 Rue de la rue");
// $client->setEmail("sandwich@example.com");
// $client->setPhone("07-07-07-07-07");

// $client->getId();
// $client->getFirstName();
// $client->getLastName();
// $client->getAddress();
// $client->getEmail();
// $client->getPhone();