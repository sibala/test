<?php 
	include("layouts/header.php");
?>


    <h1>$_POST: skicka och hämta värden genom ett formulär</h1>

	<p> <b>Uppg 1.</b><br /> 
	Skapa ett Formulär med endast ett "username" textfält och en submitknapp. <br />
	Submitknappen skall skicka dig till uppg2.php med POST variablerna "username"=dinInput och "id"=3. <br /> 
	Tänk på att använda hidden fields i ditt formulär</p> 
	
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