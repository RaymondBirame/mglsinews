<?php

class article{
    private $id;
    private $titre;
    private $contenu;
    private $categorie;
    private $dateCreation;
    private $dateModification;

    public function __construct($id, $titre, $contenu, $categorie, $dateCreation, $dateModification){
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->categorie = $categorie;
        $this->dateCreation = $dateCreation;
        $this->dateModification = $dateModification;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getContenu(){
        return $this->contenu;
    }

    public function getCategorie(){
        return $this->categorie;
    }

    public function getDateCreation(){
        return $this->dateCreation;
    }

    public function getDateModification(){
        return $this->dateModification;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function setContenu($contenu){
        $this->contenu = $contenu;
    }

    public function setCategorie($categorie){
        $this->categorie = $categorie;
    }

    public function setDateCreation($dateCreation){
        $this->dateCreation = $dateCreation;
    }

    public function setDateModification($dateModification){
        $this->dateModification = $dateModification;
    }

}

?>