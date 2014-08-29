<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  <link rel="stylesheet" href="css/table.css">
</head>
<body>
<?php
require_once('login.php');
  mysql_connect($hostname, $username, $password) or die (mysql_error());
  mysql_select_db($dbname) or die (mysql_error());


$sql="SELECT * FROM hits ";
$result = mysql_query($sql);


while($row = mysql_fetch_array($result)) {
  echo "<table>";
  echo "<th>IP_ADDRESS</th>";
  echo "<tr>";
  echo "<td>" . $row['ip'] . "</td>"."<br />";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>
