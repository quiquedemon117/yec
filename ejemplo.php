<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form type="POST" action="ejemplo.php">
            <input type="text" name="ejemplo" value="luis">
            <input type="submit">
        </form>
        <?php
        if (isset($_POST['ejemplo'])) {
            $name = $_POST['ejemplo'];
        } else {
            $name = "";
        }
        ?>
    </body>
</html>
