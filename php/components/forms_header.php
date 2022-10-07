<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../forms_style.css" />
    <title><?php echo $title ?></title>
  </head>

  <body>
    <header id="header">
        <div class="wrapper">
            <div class="header__wrapper">
                <div class="logo">NurRecords</div>
                <nav class="nav">
                    <ul class="menu">
                        <li class="menu_item">
                            <?php echo '<a href = "./index.php">Главная</a>'?>
                        </li>
                        <li class="munu_item">
                            <?php echo '<a href="./feedback.php">Связаться с нами</a>' ?>
                        </li>
                        <li class="menu_item">
                            <?php echo '<a href="./enter.php">Войти</a>'?>
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </header>