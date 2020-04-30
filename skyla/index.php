<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skyla</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <img class="logo" src="logos/icon.svg" alt="logo">

    <nav>
        <ul class="nav_links">
            <li>
                <div class="container-profile">
                    <div class="img-profile">
                        <img class="profile" src="img/Wasi.jpg">
                    </div>
                    <div class="text-profile">
                        <a href="#">Profil</a>
                    </div>
                </div>
            </li>

            <li>
                <div class="container-nachrichten">
                    <a href="#">Nachrichten</a>
                </div>
            </li>

        </ul>
    </nav>
</header>

<?php
$pdo = new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-wg006', 'wg006', 'AeB7wooch9', array('charset'=>'utf8'));
?>


<div class="posts">
    <h2>Neue Beiträge</h2>
    <br>

    <?php
    for ($a=1; $a<=5; $a++ ){
        echo "<div class=\"posts-wrapper\">";
        echo "<span>Wasi Duke und Sanja,</span>";
        echo "<br><br>";
        echo "</div>";
        echo "<div class=\"posts-wrapper\">";
        echo "<span>rauchen heute Ganja!!!!!</span>";
        echo "<br><br>";
        echo "</div>";
    }
    ?>

    <?php

    ?>



</div>


</body>
</html>











