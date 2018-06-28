<?php 
	public class Person{
		private $name;
		private $email;
		private static $ageLimit=30;

		public function __construct($name,$email){
			$this->name=$name;
			$this->email=$email;
			echo 'Person created <br>';
		}
		// Destructor
		public function __destruct(){
			echo  __CLASS__.' destroyed <br>';
		}
			#	Satic
		public static getageLimit(){
			return self::$ageLimit;
		}

		public function setName($name){
			$this->name=$name;
		}
		public function getName(){
			return $this->name.'<br>';
		}

		public function setEmail($email){
			$this->email=$email;
		}
		public function getEmail(){
			return $this->email.'<br>';
		}

	}

	// echo Person::getageLimit();

	//$person1 = new Person('Ali Hamza','test@gmail.com');

	//$person1->setName('John');
	//echo $person1->getName();

	//$person1->name = 'John Doe';
	// echo $person1->name;

	class Coustomer extends Person{
		private $balance;
		public function __construct($name,$email,$balance){
			parent::__construct($name,$email,$balance);
			$this->balance=$balance;
			echo 'A new '.__CLASS__.' has been created';
		}

		public function setBalance($balance){
			$this->balance=$balance;
		}
		
		public function getBalance(){
			return $this->balance).'<br>';
		}

	} 

	$coustomer1 = new Coustomer('johne','test@test.com',300);
 ?>