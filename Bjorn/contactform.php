<?php

if (isset($_POST['submit'])) {
  $Navn = $_POST['Navn'];
  $EmailFrom = $_POST['Email'];
  $Tlf = $_POST['Telefon Nr'];
  $Besked = $_POST['Besked'];

  //$EmailTo = "jonas@inessenceofcones.com";
  $headers = "Fra: ".$mailFrom;
  $txt = "Do har modtaget en mail fra ".$name.".\n\n".$Besked;

  mail($EmailTo, $Tlf, $txt, $headers);
  header("Location: kontaktpage.php?mailsend");
}

 ?>
