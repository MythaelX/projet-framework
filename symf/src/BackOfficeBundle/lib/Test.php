<?php
namespace BackOfficeBundle\lib;

 class Test
 {
   private $libelle;
   private $value;
   private $nb;

   function __construct($initLibelle="libelle de defaut",$initValue="valeur pas défaut",$initNb=0) {
     $this->libelle = $initLibelle;
     $this->value = $initValue;
     $this->nb = $initNb;
   }
//Getter :
   function getLibelle(){
     return $this->libelle;
   }
   function getValue(){
     return $this->value;
   }
   function getNb(){
     return $this->nb;
   }
//Setter :
  function setLibelle($initLibelle){
    $this->libelle = $initLibelle;
  }
  function setValue($initValue){
    $this->value = $initValue;
  }
  function setNb($initNb){
    $this->nb = $initNb;
  }
}
?>
