<?php 
	include("layouts/header.php");
?>


    <h1>$_COOKIE</h1>


	<p> <b>Uppg 4.</b><br />
	Hämta session värdena. Skapa ett skript med cookies som håller räkning på hur många gånger du besöker denna sida. 
	Se till att användaren ser ränkningen<br />
	När räkningen på antalet besök blir större än id numret i sessions eller om räkningen når 10, då skall användaren skickas till uppg5.php.<br /> 

	<p> Om du fastnar så kan du alltid kolla upp kodgenomgången för "Super Global Variables"</p>	
	
	<br />
    <pre>
      <?php
		//Felsök eller allmänt studera koden här med print_r
	    //print_r(); 
	  ?>
	</pre>
	<br />
	<p> Om du fastnar så kan du alltid kolla upp kodgenomgången för "HTTP & Super Globals"</p>

<?php 
	include("layouts/footer.php");
?>