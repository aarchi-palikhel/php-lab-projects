<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 Q.NO.1</title>
</head>
<body>
    <?php
        $filename='example.txt';
        if(!file_exists($filename)){
            $file=fopen($filename,'w');
            if($file){
                $written=fwrite($file,'Hello, World!');
                fclose($file);

                if($written!==false){
                    echo '<h3>File created and string written successfully.</h3>';
                }else{
                    echo '<h3>Failed to write to the file.</h3>';
                }
            }else{
                echo '<h3>Failed to create the file.</h3>';
            }
        }else{
            echo '<h3>File already exists.</h3>';
        }
    ?>
</body>
</html>