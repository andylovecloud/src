<?php
date_default_timezone_set('Europe/Helsinki');
//target_dir is the location where you want your files to be uploaded
$dest = "folder1/".basename($_FILES["userfile"] ["name"]);
    if (move_uploaded_file($_FILES["userfile"] ["tmp_name"], $dest)){
        echo "The file has been successfully uploaded. <br>";
        echo "<a href='folder1/'> Click to see list of files </a>";
    }
    else "Unable to upload file";
?>