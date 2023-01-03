<?php
require("db.php");
if (isset($_POST["submit"])){

    $pict = $_POST['picttov'];
    $price = $_POST['pricetov'];
   



    $db->query("INSERT INTO tovar(pict, price) VALUES ('$pict', '$price')");

    echo "<script>
    alert('Товар успешно создан!');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
            <input type="text" name="picttov" placeholder="url картинки товара">
            <br>
            <input type="text" name="pricetov" required placeholder="введите цену товара">
            <br>
            <button type="submit" name="submit">Создать</button>
    </form>

    <a href="index.php">Назад</a>
</body>
</html>