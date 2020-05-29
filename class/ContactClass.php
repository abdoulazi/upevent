<?php

/**
 *
 */
class ContactClass
{
	public $bdd;
	public $table = "contacts";

	public $id;
	public $nom; 
	public $email;
	public $pays;
	public $telephone;
	public $message;

	public function __construct($bdd)
	{
		$this->bdd = $bdd;
	}

 

	// Inscription 
	public function register() 
	{  
		$this->nom = htmlspecialchars(trim($this->nom));
		$this->email = htmlspecialchars(trim($this->email));
		$this->pays = htmlspecialchars(trim($this->pays));
		$this->telephone = htmlspecialchars(trim($this->telephone));
		$this->message = htmlspecialchars(trim($this->message));
  
		$sql = "INSERT INTO ".$this->table."(nom, email, pays, telephone, message) 
				VALUES (:nom, :email, :pays, :telephone, :message)";
		$req = $this->bdd->prepare($sql);

		return $req->execute(array(
			':nom' => $this->nom,
			':email' => $this->email,
			':pays' => $this->pays,
			':telephone' => $this->telephone, 
			':message' => $this->message
		));
	}
 

}