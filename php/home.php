<?php 
$title = "NurRecords";

$today = date("m.d.y"); 
$time = date("G:i:s"); 

$menu_list = ["Главная", "Связаться с нами", "Войти"]; 
$pages_list = ["index", "feedback", "login"]; 


$login = "Eugene";
$password = "123";
?>

<?php require("components/forms_header.php")?>
<div class="response_wrapper">
    <div class="response">
        <?php 

        if (isset($_POST['typeOfselect'])) {
         
            echo '<h1>Ваш запрос отправлен!</h1> <p> Здравствуйте, '.$_POST['fio'].'</p>'; 
            if ($_POST['typeOfselect'] == 'Предложение'){ 
                    echo '<p>Спасибо за ваше <strong>предложение:</strong></p>';
                    echo '<textarea readonly disabled>'.$_POST['message'].'</textarea>';
            } else {
                    echo '<p>Мы рассмотрим Вашу <strong>жалобу</strong>:</p>';
                    echo '<textarea readonly disabled>'.$_POST['message'].'</textarea>';
            }


            if (isset($_POST['file_name']) & $_POST['file_name'] != '') echo '<p>Вы приложили следующий файл: ' .$_POST['file_name'].'</p>';

            echo '<a href="feedback.php?F='.$_POST['fio'].'&E='.$_POST['email'].'&M='.$_POST['message'].'&R='.$_POST['radioValue'].'"><button class="btn">Заполнить снова</button></a>';

        } else {
            if (($_POST["login"] == $login) && ($_POST["password"] == $password)) {
                echo "<h1 class='success'>Вы успешно авторизовались!</h1>";
            } else {
                echo "<h1 class='error'>Неверный логин или пароль!</h1>";
            }
        }
        ?>        
    </div>
</div>

<?php require("components/footer.php")?>

