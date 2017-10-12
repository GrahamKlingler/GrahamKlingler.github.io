<?php

 $db = mysqli_connect('localhost','root','root','database_name')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php

$query = "SELECT * FROM table_name";
mysqli_query($db, $query) or die('Error querying database.');


$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['username'] . ': ' . $row['password'] . ': ' . $row['email'] . '<br />';
}
mysqli_close($db);
?>

</body>
</html>
