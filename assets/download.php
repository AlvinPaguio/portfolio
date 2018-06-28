<?php
//  $DBhost = "localhost";
//  $DBuser = "root";
//  $DBpass = "";
//  $DBname = "download";
//
//  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
//
//     if ($DBcon->connect_errno) {
//         die("ERROR : -> ".$DBcon->connect_error);
//     }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$sql="SELECT * from table1";
$res = $DBcon->query($sql);
echo "<table>";
while ($row=$res->fetch_assoc()) {
echo "<tr>";
echo "<td>"; echo $row["name"]; echo "</td>";
echo "<td>";?> <a href="<?php echo $row["path"]; ?>">Download</a> <?php echo "</td>";
echo "</tr>";

}

echo "</table>";
?>
</body>
</html>