<?php
class Quote {
    private $id;
    private $name;
    private $date;
    private $type;
    private $num_devis;
    private $num_affaire;
    private $status;
    private $offre;
    private $client;
    private $interlocuteur;
    private $itc;
    private $services;

    public function __construct($id, $name, $date, $type, $num_devis, $num_affaire, $status, $offre, $client, $interlocuteur, $itc, $services) {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->type = $type;
        $this->num_devis = $num_devis;
        $this->num_affaire = $num_affaire;
        $this->status = $status;
        $this->offre = $offre;
        $this->client = $client;
        $this->interlocuteur = $interlocuteur;
        $this->itc = $itc;
        $this->services = $services;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDate() {
        return $this->date;
    }

    public function getType() {
        return $this->type;
    }

    public function getNumDevis() {
        return $this->num_devis;
    }

    public function getNumAffaire() {
        return $this->num_affaire;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getOffre() {
        return $this->offre;
    }

    public function getClient() {
        return $this->client;
    }

    public function getInterlocuteur() {
        return $this->interlocuteur;
    }

    public function getItc() {
        return $this->itc;
    }

    public function getServices() {
        return $this->services;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setNumDevis($num_devis) {
        $this->num_devis = $num_devis;
    }

    public function setNumAffaire($num_affaire) {
        $this->num_affaire = $num_affaire;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setOffre($offre) {
        $this->offre = $offre;
    }

    public function setClient($client) {
        $this->client = $client;
    }

    public function setInterlocuteur($interlocuteur) {
        $this->interlocuteur = $interlocuteur;
    }

    public function setItc($itc) {
        $this->itc = $itc;
    }

    public function setServices($services) {
        $this->services = $services;
    }
}

