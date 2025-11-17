<?php
declare(strict_types=1);
class Vehicule
{
    protected $marque;
    protected $modele;
    protected $annee;

    public function __construct($marque, $modele, $annee)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function afficherDetails()
    {
        return "Marque: {$this->marque}, Modèle: {$this->modele}, Année: {$this->annee}";
    }
}

class Voiture extends Vehicule
{
    private $nombrePortes;

    public function __construct($marque, $modele, $annee, $nombrePortes)
    {
        parent::__construct($marque, $modele, $annee);
        $this->nombrePortes = $nombrePortes;
    }

    public function afficherDetails()
    {
        return parent::afficherDetails() . ", Portes: {$this->nombrePortes}";
    }
}

class Moto extends Vehicule
{
    private $typeMoteur;

    public function __construct($marque, $modele, $annee, $typeMoteur)
    {
        parent::__construct($marque, $modele, $annee);
        $this->typeMoteur = $typeMoteur;
    }

    public function afficherDetails()
    {
        return parent::afficherDetails() . ", Moteur: {$this->typeMoteur}";
    }
}

$voiture = new Voiture("Toyota", "Corolla", 2020, 4);
$moto = new Moto("Yamaha", "MT-07", 2019, "Parallèle");
echo $voiture->afficherDetails();
echo "\n";
echo $moto->afficherDetails();
?>