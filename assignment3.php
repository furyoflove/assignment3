<?php require_once("ParentClass.php"); ?>
<?php require_once("ChildClass.php"); ?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Assignment 3</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assignment3.css">
	</head>

	<body>
		<header>
			<h1>Francis Mangornong's Assignment 3</h1>
		</header>
		<main>
			<div class="myform">
	      <form name="form" id="form" action="" method="post">
	        <fieldset>
	          <legend>Please sign up!</legend>

	          <label for="name">Your name:</label>
	          <input type="text" name="name"/><br><br>

	          <label for="email">Your email:</label>
	          <input type="text" name="email"/><br><br>

	          <input type="submit" value="submit">

	        </fieldset>
	      </form>
	    </div>

			<?php

				if(!empty($_POST['name']) && !empty($_POST['email'])) {

					$parent = new ParentClass($_POST['name']);
					$child = new ChildClass($_POST['name'], $_POST['email']);
					echo "<br><br>
								<p>" . $child . "</p>";
				}

			 ?>

		</main>
	</body>

</html>
