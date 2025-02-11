<?php
    //target_dir: location where you'd want your files to be uploaded
    $dest = "folder1/".basename($_FILES["userfile"] ["name"]);
    if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $dest)){
        echo "The file has been successfully uploaded. <br>";
        echo "<a href='folder1/'> Click to see the list of files </a>";
    }
    else "Unable to upload the file.";

?>