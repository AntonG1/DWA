<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];


$con = mysqli_connect('localhost','root','root','dwalab');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_set_charset($con, "utf8");
$sql="SELECT * FROM proizvodi";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Naziv</th>
<th>Tip</th>
<th>Opis</th>
<th>Vegetarijanski</th>
<th>Halal</th>
<th>Košer</th>
<th>Alergeni</th>
<th>Cijena</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Naziv_proizvoda'] . "</td>";
    echo "<td>" . $row['Tip_proizvoda'] . "</td>";
    echo "<td>" . $row['Opis_proizvoda'] . "</td>";
    echo "<td>" . $row['Vegetarijanski'] . "</td>";
    echo "<td>" . $row['Halal'] . "</td>";
	echo "<td>" . $row['5'] . "</td>";
	echo "<td>" . $row['Alergeni'] . "</td>";
	echo "<td>" . $row['Cijena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>