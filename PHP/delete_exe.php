<?php
	include 'connect.php';
?>

<?php
	// Λήψη των τιμών POST
	$st1 = $_POST['st1'];
	
	// Σύνταξη εντολής SQL για διαγραφή  δεδομένων
	$qry="DELETE FROM tab1 WHERE st1=".$st1;
	
	// Εκτέλεση εντολής
	$qryexe = mysqli_query($conne, $qry);
	
	echo "<button onclick=\"location.href='index.php';\"> Επιστροφή </button>";
?>