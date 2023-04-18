<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web Programming</title>
</head>
<body>
    <?php
    $action="";
    if(isset($_GET["action"])){
        $action = $_GET["action"];
    }
    switch ($action) {
        case 'cookieTerhapus':
            echo "<p>Cookies sudah berhasil terhapus!<br></p>";
            break;
    }
    ?>
    <a href="setting.php">Setting</a><br>
    <a href="input.php">Input</a><br>
    <a href="display.php">Display</a><br>
    <p> 
        1600421033_Zefanya Isaac <br>
        160421039_Jennie Alvina Lecoan <br>
    </p>
</body>
</html>