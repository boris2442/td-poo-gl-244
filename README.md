## TP - Programmation Orientée Objet (exercices)

Ce dépôt contient plusieurs exercices PHP orientés objet, fournis pour s'entraîner aux concepts de classes, héritage, composition et gestion d'objets.

Fichiers fournis
- `exercice4.php` - Exemple sur les véhicules : classes `Vehicule`, `Voiture` et `Moto`. Le script instancie une voiture et une moto et affiche leurs détails.
- `exercice5.php` - (vide) Fichier actuellement sans contenu. À compléter.
- `exercice6.php` - Bibliothèque : classes `Livre` et `Bibliotheque` avec ajout, emprunt, retour et affichage des livres disponibles.
- `exercice7.php` - Composition : classes `Adresse` et `Client`. Exemple d'utilisation montrant modification d'adresse et affichage des informations client.
- `exercice8.php` - Université / Cours : classes `Etudiant`, `Cours` et `Universite` (inscription d'étudiants, affichage des cours et des étudiants inscrits).

Comment exécuter les scripts

1) En ligne de commande (PowerShell) - recommandé pour voir la sortie texte :

```powershell
php "C:\laragon\www\bts\tp-pratiques-poo 4-a 8\exercice4.php"
php "C:\laragon\www\bts\tp-pratiques-poo 4-a 8\exercice6.php"
php "C:\laragon\www\bts\tp-pratiques-poo 4-a 8\exercice7.php"
php "C:\laragon\www\bts\tp-pratiques-poo 4-a 8\exercice8.php"
```

2) Dans un navigateur via Laragon / serveur web

Placez le dossier dans le répertoire `www` de Laragon (déjà le cas). Ensuite, ouvrez l'URL correspondante, par exemple :

```
http://localhost/<nom_du_dossier>/exercice4.php
```

Remarques :
- Le nom du dossier contient des espaces — cela peut poser des problèmes dans une URL. Si possible, renommez le dossier pour enlever les espaces (ex. `tp-pratiques-poo-4-a-8`) ou utilisez la ligne de commande.
- Les scripts sont des exemples simplifiés pour démontrer des concepts OOP. Ils affichent directement des chaînes via `echo`.

Points à vérifier / tâches recommandées
- Compléter `exercice5.php` (actuellement vide).
- Ajouter des commentaires en tête de chaque fichier pour expliquer l'objectif pédagogique.
- Ajouter des tests simples ou un script runner qui exécute tous les exercices et capture la sortie.

Besoin d'aide ?
- Dites-moi si vous voulez :
  - un README en anglais,
  - que je renomme le dossier pour éviter les espaces,
  - que j'ajoute des commandes pour exécuter tous les scripts automatiquement,
  - ou que je remplisse `exercice5.php` avec un exercice (précisez le thème).

----
Généré automatiquement le: 2025-11-17
# td-poo-gl-244
