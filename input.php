<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input.php</title>
</head>
<body>
    <?php
        if (!(isset($_COOKIE["user"]))){ 
            header("location: setting.php?action=settingNotSet");
            exit();
        }
        $user_setting=array();
        if (isset($_COOKIE["user"])){
            $user_setting = $_COOKIE["user"];
        }
        $alamat_wajib =(isset($user_setting["alamat_wajib"]) && $user_setting["alamat_wajib"] == "Ya") ? "required" : "";
        $default_ipk = isset(($user_setting["ipk_wajib"])) ? $user_setting["ipk_wajib"] : "";
        $action="";
        if(isset($_GET["action"])){
            $action = $_GET["action"];
        }
        switch ($action) {
            case 'dataNull':
                echo "<p>Isi data terlebih dahulu <br></p>";
                break;
        }
    ?>
    <form action="index.php">
        <button type="submit" name="Back to index.php">Back to index.php</index></button>
    </form>
    <form action="input_process.php" method="post">
        <p>
            <label for="txtboxNRP">Nrp Mahasiswa : <input type="text" name="txtboxNRP" id="" required value = ""></label>
        </p>
        <p>
            <label for="txtboxNama">Nama Mahasiswa : <input type="text" name="txtboxNama" id="" required value = ""></label>
        </p>
        <p>
            <label for="txtareaAlamat">Alamat Mahasiswa : </label><br> <textarea name="txtareaAlamat" id="" cols="30" rows="3" <?php echo $alamat_wajib?> value = ""></textarea>
        </p>
        <p>
            <label for="txtboxIPK">IPK Mahasiswa : <input type="text" name="txtboxIPK" id="" <?php echo'value = "'.$default_ipk.'"'?>></label>
        </p>
        <p>
            <button type="submit" name = "btnsimpaninput" value="Simpan">Simpan</button>
        </p>
        
    </form>
</body>
</html>