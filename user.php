<?php
$user_iddd = $_GET['id'];
$database = mysqli_connect("'host', 'user', 'pass', 'db-name'");
$query = mysqli_query($database, "SELECT * FROM `users` WHERE `id`='{$user_iddd}'");
$aray = mysqli_fetch_array($query);
if($user_iddd = 17) {
    echo "<style>
    .term {
        color: red;
    }
    </style>";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль <?=$aray['login']?></title>
    <link rel="stylesheet" href="styles/users.css">
    <link rel="icon" href="img/groznij.ico">
    <style>
    .msg {
        border: 2px solid #FF0000;
        border-radius: 3px;
        padding: 10px;
        text-align: center;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <?php
        echo '<p style="text-align: center;"><img src="assets/harosh.gif'.'" width="200px" alt="с" /></p>';
    ?>
    <p><h1>ID: <?=$user_iddd?></h1></p>
    <p id="term"><h1 id="term">Никнейм: <?=$aray['login']?></h1></p>

    

</body>
</html>
