<?php
class Utilisateur{
//attribut
    use hydrate;
    private $idUser;
    private $mailUser;
    private $prenomUser;
    private $nomUser;
    private $mdpUser;
    private $loginUser;
    private $statut;

    //constructeur
    public function __construct(){

    }

    //methode d'utilisateur
	public function getIdUser() {
		return $this->idUser;
	}

	public function setIdUser($idUser) {
		$this->idUser = $idUser;
	}

    public function getNomUser() {
		return $this->nomUser;
	}

	public function setNomUser( $nom) {
		$this->nomUser = $nom;
	}

	public function getPrenomUser() {
		return $this->prenomUser;
	}

    public function setPrenomUser( $prenom) {
		$this->prenomUser = $prenom;
	}

	public function getLogin() {
		return $this->login;
	}

	public function setLogin( $login) {
		$this->login = $login;
	}

	public function getStatut() {
		return $this->statut;
	}

	public function setStatut( $unstatut) {
		$this->statut = $unstatut;
	}

	public function getMdpUser() {
		return $this->MdpUser;
	}

	public function setMdpUser( $unMdpUser) {
		$this->MdpUser = $unMdpUser;
	}

	public function getMailUser() {
		return $this->MailUser;
	}

	public function setMailUser( $unMailUser) {
		$this->MailUser = $unMailUser;
	}






}
?>
