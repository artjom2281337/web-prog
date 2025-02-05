<?php $title = "Main page";?>
<?php $md = "About us page"; ?>
<?php require 'header.php';?>

<main>
    <h2>About This Website</h2>
    <p>This is a simple webpage that you can edit to include your content. It includes a header and footer, with a body area where you can add information for your users.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, recusandae aliquid mollitia, nulla sequi iusto reprehenderit rem, autem minima et expedita debitis? Porro, mollitia. Laborum atque eaque hic voluptate explicabo.</p>
    <?php echo $_SERVER['DOCUMENT_ROOT'];?>
    <?php echo strlen("dolbojob"); ?>
    <?php echo "</br>";?>
    <?php echo strpos("This is my first php code", "php");?>
</main>

<?php 
require 'footer.php';
?>