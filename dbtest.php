<?php
$dbhost = getenv("DB_SERVICE_HOST");
$dbport = getenv("DB_SERVICE_PORT");
$dbuser = getenv("DB_USER");
$dbname = getenv("DB_NAME");
$dbpwd = getenv("DB_PASSWORD");;
 


$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));


$query = "SELECT * from CUSTOMERS" or die("Error in the consult.." . mysqli_error($connection));

echo "Hello All.. Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "User Id: ".$row['ID'] . " User Name: " . $row['NAME'] . " Ag: ". $row['AGE'] "<br>";
}
echo "End of the list <br>";

mysqli_close($connection);

?>
