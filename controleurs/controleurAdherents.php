<?php
$UnUtilisateur= unserialize($_SESSION['unUtilisateur']);

$bioRelai = new Menu("bioRelai");
$bioRelai->ajouterComposant($bioRelai->creerItemLien("Achat", "AdherentsAchats"));
$bioRelai->ajouterComposant($bioRelai->creerItemLien("Factures", "AdherentsFactures"));
$bioRelai->ajouterComposant($bioRelai->creerItemLien("MonCompte", "AdherentsMonCompte"));
$bioRelai->ajouterComposant($bioRelai->creerItemLien("Panier", "AdherentsPanier"));
$bioRelai->ajouterComposant($bioRelai->creerItemLien("Deconnexion", "Deconnexion"));
$menuPrincipalbioRelai = $bioRelai->creerMenu('bioRelai','bioRelai');
$_SESSION['bioRelai'] = "AdherentsMonCompte";

if(!empty($_SESSION['navBarRequete'])){
  //var_dump($_SESSION['navBarRequete']);
  //on initialise le session biorelai
  $_SESSION['bioRelai']  = $_SESSION['navBarRequete'];
  //ensuite on vide le session navBar
  $_SESSION['navBarRequete'] = [];
}

include_once dispatcher::dispatch($_SESSION['bioRelai']);
