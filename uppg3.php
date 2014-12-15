<?php 
	include("layouts/header.php");
?>


    <h1>$_SESSION</h1>
    <h3> URLen: examplePage.php ? var1=value1 & var2=value2</h3>


	<p> <b>Uppg 3.</b><br />
	Kolla om GET variablerna är satta.
	Om du kom från uppg2 skall du echo exempelvis "Ahhh du kom från uppg2.php. Du måste vara Harald". Hämta GET variablerna username och id och tilldela dessa till sessions.<br />
	Om användaren kom exempelvis direkt via URLen, omdirigera användaren till uppg1.php och där skall du ge meddelandet "Du måste ange ditt namn innan du kan gå vidare!" <br /> 
	På uppg3.php skall du även skapa en länk till uppg4.php
	</p>

	
	
	
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