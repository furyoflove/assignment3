<?php

	// This is the file for the parent class

	class ParentClass {

		// Global variables
		private $name,
						$email,
						$id;

		// empty class constructor
		public function __construct() {

			$this->name = "Your name";

		}

		// partial constructor
		public function __construct($name) {

			$this->name = $name;

		}

		// full constructor
		public function __construct($name, $email, $id) {

			$this->name = $name;
			$this->email = $email;
			$this->id = $id;

		}

		//  print method
		public function __toString() {

			return $this->name;

		}

	} // End of class

?>
