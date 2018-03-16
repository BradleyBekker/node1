<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Ma">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		// <link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
	</head>
	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
			 }
             //   $string3 = ltrim($input1.$input2);
			// "schrijf hier de benodigde code"
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Bradley Bekker + GD1B</legend>
				 <input type = "text" name = "input1"  placeholder = "string 1" value = <?php echo $input1; ?> >  <br>
				 <input type = "text" name = "input2"  placeholder = "string 2" value = <?php echo $input2; ?>>
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php

			?><ul>
					<li class="showSpaces">Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
					<li class="showSpaces">Ingevoerde string 2:  <?php  echo $input2  ?> </li>
					<li>String 1 getrimd trim():  <?php echo $input1 = trim($input1);     ?> </li>
                    <li>String 2 getrimd trim():  <?php echo $input2 = trim($input2);     ?> </li>
                    <li>String 3 is de concatenation van string 1 en string 2: <?php echo $string3 = $input1 . $input2;  ?></li>
                    <li>De lengte van string 3 is: <?php echo strlen($string3); ?></li>
                    <li>positie van spatie = <?php echo strpos($string3, " ");?></li>
                    <li>positie van "." =<?php echo strpos($string3, ".");?></li>
                    <li>positie van @ =<?php echo strpos($string3, "@");?></li>
                    <li>verander "PHP" in "nodeJS"= <?php echo str_replace("PHP", "NODEJS", $string3); ?></li>
                    <li>eerste  letter string3 uppercase= <?php echo ucfirst($string3);?></li>
                    <li>string 3 uppercase= <?php echo strtoupper($string3); ?></li>
                    <li><?php
                        $posA = strpos($string3, "@");
                        $pospunt = strpos($string3, ".");
                        if ( $pospunt > $posA + 2){
                        echo "dit kan een geldig e-mailadrees zijn";
                        }
                        else{echo "dit is geen geldig email adress";}
                        ?></li>
				</ul>
				<hr>
				<ol>
				<li>Opdracht:<br> Stringhandler. Maak de PHP code voor <a href="http://schw.hosts.ma-cloud.nl/stringhandler/stringhandler.php">Stringhander<a>
				<li>Hoe moet jij inleveren?: <br>
						1) Link naar de werkende code in jouw portfoliomap bij Ma-cloud<br>
						2) Link naar jouw code bij GITHUB</li>
				<li>Bonus opdracht: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.</li>
				<li>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden</li>
				</ol>
			</div>
	 </body>
</html>
