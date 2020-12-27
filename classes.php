<?php
class Product  {
  public $id;
  public $libelle;
  public $image;

  public $categorie;
  public $prix;
  public $promo;





  function __construct($id,$libelle,$image,$categorie,$prix,$promo) {
    $this->id = $id;
    $this->libelle = $libelle;
    $this->image = $image;

    $this->categorie = $categorie;
    $this->prix = $prix;
    $this->promo = $promo;

  }
  function get_id() {
    return $this->id;
  }
  function get_libelle() {
    return $this->libelle;
  }
  function get_categorie() {
    return $this->categorie;
  }
  function get_image() {
    return $this->image;
  }
  function get_prix() {
    return $this->prix;
  }
  function get_promo() {
    return $this->promo;
  }
}

?>