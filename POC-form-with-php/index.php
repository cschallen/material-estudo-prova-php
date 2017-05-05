<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POC</title>
</head>
<body>
    <form action="index.php" method="post">

        Naame:<br>
        <input type="text" name="name"><br>
        Email:<br>
        <input type="text" name="email"><br>

        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>

        <select name="age">
            <option value="0">Escolha sua idade</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>

        <input type="submit" name="submit" value="Enviar">
    </form>
    <?php

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['age'])){
        // coletar dados
        try {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];

            $row = $name . ";" . $email . ";" . $gender . ";" . $age;

            $file = 'pessoas.csv';
            $fp = fopen($file, 'a');
            fputcsv($fp, explode(';', $row));
            fclose($fp);
        } catch(Exception $ex) {
            echo "errouuuuuuuuu";
        }
    }
    ?>
</body>
</html>
