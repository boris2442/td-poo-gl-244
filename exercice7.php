<?php
declare(strict_types=1);
// Classe Adresse
class Adresse
{
    private string $rue;
    private string $ville;
    private string $codePostal;
    private string $pays;

    public function __construct(string $rue, string $ville, string $codePostal, string $pays)
    {
        $this->rue = $rue;
        $this->ville = $ville;
        $this->codePostal = $codePostal;
        $this->pays = $pays;
    }

    // Méthodes getter et setter
    public function getRue(): string
    {
        return $this->rue;
    }

    public function setRue(string $rue): void
    {
        $this->rue = $rue;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    // Afficher l'adresse complète
    public function afficher(): string
    {
        return $this->rue . ", " . $this->ville . " " . $this->codePostal . ", " . $this->pays;
    }
}

// Classe Client
class Client
{
    private string $nom;
    private string $prenom;
    private Adresse $adresse; // Composition : un client "a" une adresse

    public function __construct(string $nom, string $prenom, Adresse $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }

    // Méthode pour modifier l'adresse
    public function modifierAdresse(Adresse $nouvelleAdresse): void
    {
        $this->adresse = $nouvelleAdresse;
    }

    // Afficher les informations complètes du client
    public function afficherInformations(): void
    {
        echo "Nom : " . $this->nom . "\n";
        echo "Prénom : " . $this->prenom . "\n";
        echo "Adresse : " . $this->adresse->afficher() . "\n";
    }
}

// --- Exemple d'utilisation ---
$adresse1 = new Adresse("12 Rue des Fleurs", "Paris", "75000", "France");
$client1 = new Client("Dupont", "Jean", $adresse1);

// Afficher infos client
$client1->afficherInformations();

// Modifier l'adresse du client
$nouvelleAdresse = new Adresse("45 Avenue des Champs", "Lyon", "69000", "France");
$client1->modifierAdresse($nouvelleAdresse);

// Afficher infos mises à jour
echo "\nAprès modification de l'adresse :\n";
$client1->afficherInformations();
