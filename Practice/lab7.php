<?php
    $oldfile="mountain.txt";
    $newfile="himalayan.txt";
    if(file_exists($oldfile)){
        if(file_exists($newfile)){
            echo "file already exist";
        }else{
            if(rename($oldfile,$newfile)){
                echo "file ".htmlspecialchars($oldfile)." renamed to ".htmlspecialchars($newfile);
            }
            else{
                echo "Some problem occured.";
            }
        }
    }else{
        echo "old file does not exists.";
    }
?>