<?php



$con = mysqli_connect("host.docker.internal", "root","root", "docker", 3306);


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
else {
    echo "connected";
}


$sql = "SELECT * FROM test";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {

    echo $row['name'] . "<br>";
}

// Check connection

?>