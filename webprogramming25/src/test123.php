<?php

echo"Hello";

$var1 = " World";
echo $var1 . "<br/>";
echo "Hello " . $var1 . "<br/>";

$string1 = "php smth";
echo $string1 . "<br/>";

$var2 = "Hello";
echo $var1 . " ". $var2;

echo "<br/>This is \"php\" course";

$var3 = 25;
echo "<br/>Value of var3 is ". $var3;

$var4 = 50;
echo "<br/>Sum of var3 and var4 is ". $var3+$var4;
?>


<meta name="description" content="<?php if(isset($metadesc) && !empty($metadesc)) (echo $metadesc) else (echo "nah";)?>;">
$title
<title><?php if(isset($title) && !empty($title)) (echo $title;) else (echo "smth default")  ?></title>