<?php
	require('./klienci.php');
	$k1 = new Klient;
	$k1->setImie('Jan');
	$k1->setNazwisko('Kowalski');
	$k1->setLogin('jankowalski');
	$k1->setHaslo('12345');
	$im = $k1->getImie();
	$naz = $k1->getNazwisko();
	$log = $k1->getLogin();
	$pas = $k1->getHaslo();
	echo "Klient 1 to " . $im . " " . $naz . " " . $log . " " . $pas . "<br\>";
?>