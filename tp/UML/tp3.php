<?php

class Genre{
    private $libellé;
    private $leslivres;
    private $etagere;

    public function __construct($libellé, $leslivres, $etagere){
        $this->libellé = $libellé;
        $this->leslivres = $leslivres;
        $this->etagere = $etagere;
    }

    private function rangLivre($titreLivre){
        $i = 0;
        do{
            $i += 1;
        }while($i <= $this->leslivre.cardinal() && $this->leslivres.donnerObjet($i).getTitre() == $titrelivre);
        return $i;
    }

    /* La procédure Genre :: placeLivre insère un livre au rang voulu 
    et décale éventuellement les livres de rang supérieur. */
    public function PlaceLivre($unLivre){
        $this->lesLivre.ajouter($unlivre);
        $index = $this->lesLivre.index($unlivre);
        $this->lesLivre.remplacerA($index-1,$unlivre);
    }
}


class Livre{

    private $titre;
    private $Genre;
    private $lesLivres;

    public function __construct($titreLivre, $unGenre, $lesLivres){
        $this->titreLivre = $titreLivre;
        $this->Genre = $unGenre;
        $this->lesLivres = $leslivres;
    }
   
}

class Bibliothèque{

    private $leslivres;

    public function __construct(){

    }
    
    public function nouveauLivre($titreLivre, $libelléGenre){
        $unLivre = new Livre($titreLivre, $libelléGenre, $this->leslivres);
        $this->lesLivres.ajouter($unLivre);
    }
}

