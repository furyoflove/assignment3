<?php

	// This is the file for the parent class

	class ParentClass {

		// Global variables
		protected $name;

		// full constructor
		public function __construct($name) {

			$this->name = $name;

		}

		//  print method
		public function __toString() {

			return " Hi " . $this->name . "!";

		}

	} // End of class

?>
