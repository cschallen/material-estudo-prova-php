<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>read csv</title>
    </head>
    <body>
        <?php
        $file = fopen('pessoas.csv', 'r');

        while(($line = fgetcsv($file)) !== FALSE){
            print_r($line);
        }
        fclose($file);
        ?>
    </body>
</html>
