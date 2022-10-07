<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style.css"/>
        <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title> 
    </head>
        <body>
            <header id="header">
            <div class="wrapper">
                <div class="header__wrapper">
                    <div class="logo">NurRecords</div>
                    <nav class="nav">
                        <ul class="menu">
                            <?php for($i = 0; $i < count($menu_list); $i++): ?>
                            <?php echo '<li class="menu__item"><a href="#',$id_list[$i],'">',$menu_list[$i],'</a></li>' ?>
                            <?php endfor ?>
                            <li class="munu_item">
                              <a href=<?php
                              $link = "./feedback.php";
                              $link_name = "Связаться с нами";
                              echo $link
                              ?>><?= $link_name ?></a>
                            </li>
                            <li class="menu_item">
                            <a href=<?php
                              $link = "./enter.php";
                              $link_name = "Войти";
                              echo $link
                              ?>><?= $link_name ?></a>
                            </li>
                        </ul>
                    </nav>
                    </div>
                </div>
            </header>