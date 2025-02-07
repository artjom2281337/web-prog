<?php include 'db.php' ;
$name= $_POST['name'];
$startdate= $_POST['startdate'];
$enddate= $_POST['enddate'];
$location= $_POST['location'];
$postcode= $_POST['postcode'];
$sql="INSERT INTO jobs ('name', startdate, enddate, 'location', postcode)
VALUES('$name', '$startdate', '$enddate', '$location', '$postcode')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>