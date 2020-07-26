<?php
require_once '../entites/compte_epargne.php';
class compte_epargne extends comptes
{
    //crud
    public function __construct(){parent:: __construct();}
    public function add(){
$req='INSERT INTO compte_epargne(solde,fraisOuverture,remuneration,dateOuverture)
VALUES(
    $this->$solde
    $this->$fraisOuverture
    $this->$remuneration
    $this->$dateOuverture
)
$resultat=$this->db->exec $req
return $resultat;
    }
}

private $;
    private $fraisOuverture;
    private $remuneration;
    private $dateOuverture

?>