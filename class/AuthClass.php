<?php

/**
 *
 */
class AuthClass
{
	public $bdd;
	public $table = "users";

	public $id;
	public $nom_et_prenom;
	public $email;
	public $password;

	public function __construct($bdd)
	{
		$this->bdd = $bdd;
	}

	// Fonction login
	public function login($email, $password) {

		$email = htmlspecialchars(trim($email));
		$password = htmlspecialchars(trim($password));

		if(!$this->isEmailExist($email)) {
 			$_SESSION['message'] = "L'adresse email que vous avez entrer n'existe pas.";
		} else {
			if(password_verify($password, $this->password)) {
				$_SESSION['id'] = $this->id;
				$_SESSION['nom_et_prenom'] = $this->nom_et_prenom;
				$_SESSION['email'] = $this->email; 
			}
		}

	}

	// Inscription 
	public function register() 
	{ 
		$this->nom_et_prenom = htmlspecialchars(trim($this->nom_et_prenom));
		$this->email = htmlspecialchars(trim($this->email));
		$this->password = htmlspecialchars(trim($this->password));

		$this->password = password_hash($this->password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO ".$this->table."(nom_et_prenom, email, password) 
				VALUES (:nom_et_prenom, :email, :password)";
		$req = $this->bdd->prepare($sql);

		return $req->execute(array(
			':nom_et_prenom' => $this->nom_et_prenom,
			':email' => $this->email,
			':password' => $this->password
		));
	}

	// Email exist ?
	public function isEmailExist($email) {
		$req = $this->bdd->query("SELECT * FROM users WHERE email ='".$email."' ");
		if($req->rowCount() > 0) {
			$user = $req->fetch();
			$this->id = $user['id'];
			$this->password = $user['password'];
			return true;
		} 
		return false;
	}

}