<?php include 'db.php' ;
$image= $_POST['image'];
$price= $_POST['price'];
$price_kilo= $_POST['price_kilo'];
$type= $_POST['type'];
$country= $_POST['country'];
$company= $_POST['company'];
$ingred= $_POST['ingred'];
$allergies= $_POST['allergies'];
$sql="INSERT INTO items ('image', price, price_kilo, 'type', country, company, ingred, allergies)
VALUES('$image', '$price', '$price_kilo', '$type', $country, $company, $ingred, $allergies)";

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