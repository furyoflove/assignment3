<?php

	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {

		private $email;

		// full constructor
		public function __construct($name, $email) {

			parent::__construct($name);
			$this->email = $email;

		}

		// print method
		public function __toString() {

			return parent::__toString() .
						" Thanks for signing up with your email address at: " .
						$this->email;

		}


	} // End of class

?>
