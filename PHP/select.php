
<?php
	include 'connect.php';
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Εμφάνιση Δεδομένων</title>
</head>

<body>

<div id="center">

<table border=2 align=center>
<!--thead><-->
	<tr>
		<th width=80>Πεδίο st1</th>
		<th width=80>Πεδίο st2</th>
	</tr>
<!--/thead><-->
<!--tbody><-->
<?php
	// Σύνταξη Ερωτήματος για την εμφάνιση δεδομένων
	$qry = "SELECT * FROM tab1";
	
	// Εκτέλεση Ερωτήματος
	$result = mysqli_query($conne, $qry);
	
	// Παρουσίαση αποτελεσμάτων Ερωτήματος
	while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
		
        echo ("<tr><td><div align=\"center\"> $row[0]</div></td>
				<td><div align=\"center\"> $row[1] </div></td></tr>");
	}
?>

<!--/tbody><-->
</table>

<button onclick="location.href = 'index.php';"> Επιστροφή </button>
</div>

</body>
</html>
