<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  <link rel="stylesheet" href="css/table.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require_once('login.php');
  mysql_connect($hostname, $username, $password) or die (mysql_error());
  mysql_select_db($dbname) or die (mysql_error());


$sql="SELECT * FROM hits ";
$result = mysql_query($sql);


while($row = mysql_fetch_array($result)) {
  echo "<div class='container'>";
  echo "<table class='table table-striped'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>IP_Address</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
  echo "<tr>";
  echo "<td>" . $row['ip'] . "</td>";
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";
  echo "</div>";
  echo "</div>";
}
echo "";

mysqli_close($con);
?>

</body>
</html>
