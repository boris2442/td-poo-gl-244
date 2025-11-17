<?php

class Etudiant
{
    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }
}

class Cours
{
    public $titre;
    private $etudiants = [];

    public function __construct($titre)
    {
        $this->titre = $titre;
    }

    public function inscrireEtudiant(Etudiant $etudiant)
    {
        $this->etudiants[] = $etudiant;
    }

    public function afficherEtudiants()
    {
        echo "Étudiants inscrits au cours '{$this->titre}' :\n";
        foreach ($this->etudiants as $etudiant) {
            echo "- {$etudiant->nom}\n";
        }
    }
}

class Universite
{
    public $nom;
    private $cours = [];

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function ajouterCours(Cours $cours)
    {
        $this->cours[] = $cours;
    }

    public function afficherCours()
    {
        echo "Cours offerts par l'université {$this->nom} :\n";
        foreach ($this->cours as $c) {
            echo "- {$c->titre}\n";
        }
    }
}
// Illustration
$universite = new Universite("Université de Paris");
$coursMaths = new Cours("Mathématiques");
$coursPhysique = new Cours("Physique");
$universite->ajouterCours($coursMaths);
$universite->ajouterCours($coursPhysique);
$etudiant1 = new Etudiant("Alice");
$etudiant2 = new Etudiant("Bob");