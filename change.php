<?php
require("db.php");

if ($_SERVER['REQUEST_METHOD']==='GET'){

    $id=$_GET["id"];
    $tov = $db->query("SELECT* FROM tovar WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);

    
        $tov=$tov[0];
    
} else if ($_SERVER['REQUEST_METHOD']==='POST'){
    $id = $_POST['id'];
    $pict = $_POST['picttov'];
    $price = $_POST['pricetov'];

    $db->query("UPDATE tovar SET pict='$pict', price='$price' WHERE id=$id");
    echo "<script>
    alert('успешно обновлено');
    location.href ='index.php';
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

        <input type="text" name="picttov" value="<?php echo $tov['pict']?>">
        <br>
        <input type="text" name="pricetov" value="<?php echo $tov['price']?>">
        
        <!--  -->
        <input type="hidden" name="id" value="<?php echo $tov['id']?>">
        <br>
        <button type="submit" name="submit">Сохранить</button>

    </form>
    <a href="index.php">Назад</a>
</body>
</html>