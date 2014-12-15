<?php 
	include("layouts/header.php");
?>


    <h1>$_GET: skicka och hämta värden genom URLen</h1>
    <h3> URLen: examplePage.php ? var1=value1 & var2=value2</h3>

	<p> <b>Uppg 2.</b><br />
	Hämta POST variablerna username och id. Använd username för en hälsningsfras ex "Hej Harald"<br /> 
	Sedan skall du skapa en länk som skickar username och id till uppg3.php</p> 
	
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