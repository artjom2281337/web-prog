<?php
require 'user/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="search" class="search"><input type="submit" name="submit" value="Search for data">
    </form>

    <?php 
        $search = $_POST['search'];
        $sql = "SELECT * FROM 'search' WHERE 'title' LIKE '%$search%' OR 'text' LIKE '%$search%'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            echo "<h1>". $row["title"] ."</h1><p>". $row["text"]."</p><br>";
        } while($row = $result->fetch_assoc()) {
        }


    
    ?>
</body>
</html>