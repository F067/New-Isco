<?php
include_once("Interlocuteur.php");
include_once("Client.php");

class ClientInterlocuteur {
    private $id;
    private $client;
    private $interlocuteur;
    public function __construct($id, $client) {
        $this->id = $id;
        $this->client = $client;
        $this->interlocuteur = array();
    }

    public function getId() {
        return $this->id;
    }


    public function getClient() {
        return $this->client;
    }

    public function setClient($client) {
        $this->client = $client;
    }

    public function getInterlocuteur() {
        return $this->interlocuteur;
    }

    public function setInterlocuteur($interlocuteur) {
        $this->interlocuteur = $interlocuteur;
    }
}


$client = new Client(1, "Gregory", "Foïs", "32 Rue de la rue", "Greg@example.com", "06-06-06-06-06");

// Create some interlocuteur objects
$interlocuteur1 = new Interlocuteur(1,"autre","Jackson","mickel","smooth@criminal.com","00","OO","principal");

$client->addInterlocuteur($interlocuteur1);

$interlocuteur2 = new Interlocuteur(2,"homme","Spears","britney ","again@opps.com","00","OO","autre");

$client->addInterlocuteur($interlocuteur2);

// Create a client interlocuteur object
$clientInterlocuteur = new ClientInterlocuteur(1,$client);

$clientInterlocuteur->setInterlocuteur($interlocuteur1);

// Display the client interlocuteur object's properties
echo "Client Interlocuteur ID: " . $clientInterlocuteur->getId() . "\n";
echo "Client ID: " . $clientInterlocuteur->getClient()->getId() . "\n";
echo "Interlocuteur ID: " . $clientInterlocuteur->getInterlocuteur()->getId() . "\n";
echo "Interlocuteur Civility: " . $clientInterlocuteur->getInterlocuteur()->getCivility() . "\n";
echo "Interlocuteur First Name: " . $clientInterlocuteur->getInterlocuteur()->getFirstName() . "\n";
echo "Interlocuteur Last Name: " . $clientInterlocuteur->getInterlocuteur()->getLastName() . "\n";
echo "Interlocuteur Email: " . $clientInterlocuteur->getInterlocuteur()->getEmail() . "\n";
echo "Interlocuteur Phone: " . $clientInterlocuteur->getInterlocuteur()->getPhone() . "\n";