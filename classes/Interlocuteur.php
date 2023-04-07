<?php
class Interlocuteur {
    private $id;
    private $civility;
    private $lastName;
    private $firstName;
    private $email;
    private $phone;
    private $cellPhone;
    private $type;
    private array $itc;


    public function __construct($id, $civility, $lastName, $firstName, $email, $phone, $cellPhone, $type) {
        $this->id = $id;
        $this->civility = $civility;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->phone = $phone;
        $this->cellPhone = $cellPhone;
        $this->type = $type;
        $this->itc = [];


    }
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCivility() {
        return $this->civility;
    }

    public function setCivility(string $civility) {
        $this->civility = $civility;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getCellPhone() {
        return $this->cellPhone;
    }

    public function setCellPhone($cellPhone) {
        $this->cellPhone = $cellPhone;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

      // relation avec la Quote
      public function addItc(ITC $itc): void {
        $this->itc[] = $itc;
    }

    public function getItc(): array {
        return $this->itc;
    }
   
}
