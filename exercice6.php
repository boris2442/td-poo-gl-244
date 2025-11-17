<?php

class Livre
{
    public $isbn;
    public $titre;
    public $auteur;
    public $anneePublication;
    public $disponible;

    public function __construct($isbn, $titre, $auteur, $anneePublication)
    {
        $this->isbn = $isbn;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
        $this->disponible = true;
    }
}

class Bibliotheque
{
    private $nom;
    private $listeLivres = [];

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function ajouterLivre(Livre $livre)
    {
        $this->listeLivres[] = $livre;
    }

    public function emprunterLivre($isbn)
    {
        foreach ($this->listeLivres as $livre) {
            if ($livre->isbn === $isbn && $livre->disponible) {
                $livre->disponible = false;
                return "Livre emprunté avec succès.";
            }
        }
        return "Livre indisponible.";
    }

    public function retournerLivre($isbn)
    {
        foreach ($this->listeLivres as $livre) {
            if ($livre->isbn === $isbn) {
                $livre->disponible = true;
                return "Livre retourné avec succès.";
            }
        }
        return "Livre introuvable.";
    }

    public function afficherLivresDisponibles()
    {
        $resultat = "Livres disponibles :\n";
        foreach ($this->listeLivres as $livre) {
            if ($livre->disponible) {
                $resultat .= "- {$livre->titre} ({$livre->auteur})\n";
            }
        }
        return $resultat;
    }
}
$bibliotheque = new Bibliotheque("Bibliothèque Centrale");
$livre1 = new Livre("978-3-16-148410-0", "Le Petit Prince", "Antoine de Saint-Exupéry", 1943);
$livre2 = new Livre("978-0-14-044913-6", "Les Misérables", "Victor Hugo", 1862);
$bibliotheque->ajouterLivre($livre1);
$bibliotheque->ajouterLivre($livre2);
echo $bibliotheque->afficherLivresDisponibles();
?>