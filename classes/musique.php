<?php

/*
 * 
 * Class qui va selectionné toute nos colonnes dans la table musique
 * 
 */

class musique {

    //initialisation des attributs
    protected $id;
    protected $image;
    protected $titre;
    protected $description;
    protected $type_ambiance;

    public function getId() {
        //Role: retourne l'attribut $id
        return $this->id;
    }

    public function getImage() {
        //Role: retourne l'attribut $image
        return $this->image;
    }

    function getTitre() {
        //Role: retourne l'attribut $titre
        return $this->titre;
    }

    public function getDescription() {
        //Role: retourne l'attribut $description
        return $this->description;
    }

    public function getType_ambiance() {
        //Role: retourne l'attribut $type_ambiance
        return $this->type_ambiance;
    }

    //SETTER

    public function setId($id) {
        //Role: modifie l'attribut $id
        $this->id = $id;
    }

    public function setImage($image) {
        //Role: modifie l'attribut $image
        $this->image = $image;
    }

    public function setTitre($titre) {
        //Role: modifie l'attribut $titre
        $this->titre = $titre;
    }

    public function setDescription($description) {
        //Role: modifie l'attribut $description
        $this->description = $description;
    }

    public function setType_ambiance($type_ambiance) {
        //Role: modifie l'attribut $type_ambiance
        $this->type_ambiancee = $type_ambiance;
    }

    public function selectProduit() {
        //Role : va séléctionner tout les colonnes dans la table musique

        global $bdd;

        $sql = "SELECT * FROM `musique`";

        $sql = $bdd->prepare($sql);

        $sql->execute();

        $musique = $sql->fetchAll(PDO::FETCH_ASSOC);

        include 'produit.php';
    }

}
