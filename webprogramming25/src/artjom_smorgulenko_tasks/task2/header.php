<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $md?>">
    <title>
        <?php echo $title;?>   
    </title>
    <style>
         body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        img{
            width: 300px;
            height: auto;
        }
        nav li {
            display: inline;
            margin-right: 30px;
        }
        nav a{
            text-decoration: none;
            text-transform: uppercase;
            color: gray;
        }
        nav a:hover{
            color: forestgreen;
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <p>Your go-to source for web development tutorials</p>

        <nav>
            <li><a href="main.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="contact.php">Contact</a></li>
        </nav>
    </header>