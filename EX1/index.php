<?
    require "config.php";

    $sql = "select * from basket";
    $result = mysqli_query($connect, $sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
<h2>Список товаров</h2>
<table>
    <tr>
        <td>Название</td>
        <td>Цена</td>
        <td>Количество</td>
        <td>Добавить</td>
    </tr>
    <tr>
        <td class="name">Ботинки</td>
        <td class="price">2700</td>
        <td><input class="quantity" type="number" value="1"></td>
        <td><button class="add"><i class="fas fa-plus-circle"></i></button></td>
    </tr>
    <tr>
        <td class="name">Пуховик</td>
        <td class="price">18999</td>
        <td><input class="quantity" type="number" value="1"></td>
        <td><button class="add"><i class="fas fa-plus-circle"></i></button></td>
    </tr>
    <tr>
        <td class="name">Лыжи</td>
        <td class="price">3500</td>
        <td><input class="quantity" type="number" value="1"></td>
        <td><button class="add"><i class="fas fa-plus-circle"></i></button></td>
    </tr>
</table>
<h2>Корзина</h2>
<table id="basket">
    <tr>
        <td>Название</td>
        <td>Количество</td>
        <td>Цена</td>
        <td>Удалить</td>
    </tr>
    <?php
      while ($data = mysqli_fetch_assoc($result)) {
          echo
            '<tr>
                <td class="name">'.$data["name"].'</td>
                <td>'.$data["quantity"].'</td>
                <td>'.$data["price"].'</td>
                <td><button class="remove"><i class="fas fa-trash-alt"></i></button></td>
            </tr>';
      }
    ?>
</table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>
