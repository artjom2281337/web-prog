<?php
/*  file handling
    file_exists(): to check if the file exists or not
    1st thing we need to do is to check whether the 
    file exists or not
 */
echo "<h2> Checking if the files exists or not </h2>";
// phpinfo();
// Make sure to properly give relative/abs path
if(file_exists("lec2/about.php"))
{
    echo "File exists.";
}
else
{
    echo "File Doesn't Exist.";
    echo "<hr><h2>Creating a file </h2>";
    /*  To create a file, follow these steps:
        1) Use fopen() function to open a file
        2) Utilise functions like: fwrite, fread, fgets to read
        3) Close the file.
    */
        $newfile = fopen('file.txt', 'a') or die("Failed to create a file");
        $txt = "Hello world";
        fwrite($newfile, $txt);
        fclose($newfile);
    
        echo "<hr><h2> Creating a new file.</h2>";
        echo "<hr><h2> Reading from a file.</h2>";
        
        //fread(): For reading a file
        //https://www.php.net/manual/en/function.fread.php
    

    $fname = "file.txt";
    $handle = fopen($fname,"r");
    $cont = fread($handle, filesize($fname));
    echo $cont;
    fclose($handle);

    // --------------------------------------------- 
    // EXAMPLE: fread()
    echo "<hr><h2> Read defined number of characters from the file.</h2>";
    $fh = fopen("file.txt","r") or die("Unable to read the file.");
    $text = fread($fh, 5);
    fclose($fh);
    echo $text;
    
    // --------------------------------------------- 
    // COPYING A FILE: copy()
    copy('file.txt', 'filecopy.txt') or die("File copy Failed.");
    echo "File copy successful.<br>";

    // RENAME()
    if(rename('filecopy.txt', './newfile.txt'))
    {
        echo "<br>File renamed successfully";
    }
    else {echo "<br>Cannot rename the file.";}
    // --------------------------------------------- 
    // unlink(): Deleting a file
    if(unlink('./newfile.txt'))
    {echo "<br>File deleted successfully";}
    else {echo "<br>Unable to delete the file.";}
    
    // --------------------------------------------- 
    // FLOCK(): queues up all other requests for accessing a file until your program releases the lock.
    // It is used when, for instance, several users try to access the same file.

    /*
    // open the file r+ : reading & writing
    $file = fopen('file.txt', 'r+') or die('Failed to open the file.');
    // fgets() to read single line in the file
    $text = fgets($file);
    // flock to set the file lock using LOCK_EX parameter (exclusive lock)
    if (flock($file, LOCK_EX)){
        ftruncate($file, 0);    // Truncate the file, 0 means that file is truncated to zero length, deleting everything
        fwrite($file, "Add some text") or die("Can't write text");
        fflush($file);          // flush the output before releasing the lock, this ensures that the changes
                                // made to the file are written immediately before releasing the lock
        flock($file, LOCK_UN);  // release the file lock
    }
    else {
        echo "Unable to lock the file.";
        fclose($file);
    }
    */

    /* ********************************************************* DIY
    echo "<hr><h2> Reading from a remote file.</h2>";
    // 'rb' mode to open non-text files
    
    // $handle = fopen("https://yle.fi/", "rb");
    // if (FALSE === $handle)
    // {
    //     exit("ERROR. Unable to open stream to URL.");
    // }
    // $contents = stream_get_contents($handle);
    // echo $contents;
    // fclose($handle);

    // ALTERNATE METHOD TO THE ABOVE ONE
    $ch = curl_init("https://yle.fi/news/tuoreimmat");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Set a User-Agent string similar to a common browser (e.g., Chrome or Firefox)
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
    
    // Optionally, disable SSL verification (if required)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Disable SSL verification, use with caution
    
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        echo $response;
    }
    
    curl_close($ch);
    */    

    /* *********************************************************
    // Uploading Files: https://www.php.net/manual/en/features.file-upload.php
    <hr><h2> File Upload Example </h2>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        select file to upload: <input name="userfile" type="file" required><br>
        <input type="submit" value="Upload File" >
    </form>

    */
}


