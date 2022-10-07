<?php
$title="Nurburgring records";

$today= date("d.m.y");
$time = date("G:i:s");

$s = date("s");
$os = (int)$s % 2;

$img1;

if($os == 0){
    $img1 = "map";
} else {
    $img1 = "map2";
}

$menu_list = ["Главная", "Таблица рекордов", "Галерея", "Контакты"];
$id_list = ["main", "table", "gallery", "footer"];
?>

<?php require("components/header.php")?>
<?php require("components/main.php")?>
<?php require("components/footer.php")?>