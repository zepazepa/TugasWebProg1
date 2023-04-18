<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setting.php</title>
</head>
<body>
    <?php
    $user_setting=array();
    if (isset($_COOKIE["user"])){
        $user_setting = $_COOKIE["user"];
    }
    //alamat
    $alamat_wajib_ya = (isset($user_setting["alamat_wajib"]) && $user_setting["alamat_wajib"] == "Ya") ? "checked" : "";
    $alamat_wajib_tidak = (isset($user_setting["alamat_wajib"]) && $user_setting["alamat_wajib"] == "Tidak") ? "checked" : "";
    //default ipk
    $default_ipk = (isset($user_setting["ipk_wajib"])) ? $user_setting["ipk_wajib"] : "";

    //ukurang font
    $ukuran_font = (isset($user_setting["ukuran_font"])) ? $user_setting["ukuran_font"] : "";
    //tampilan font
    $normal = (isset($user_setting["tampilan_font"]) && $user_setting["tampilan_font"] == "normal") ? "selected" : "";
    $bold = (isset($user_setting["tampilan_font"]) && $user_setting["tampilan_font"] == "bold") ? "selected" : "";
    $italic = (isset($user_setting["tampilan_font"]) && $user_setting["tampilan_font"] == "italic") ? "selected" : "";
    $underline = (isset($user_setting["tampilan_font"]) && $user_setting["tampilan_font"] == "underline") ? "selected" : "";
    //alamt ditampilkan
    $alamat_ditampilkan_ya = (isset($user_setting["alamat_ditampilkan"]) && $user_setting["alamat_ditampilkan"] == "Ya") ? "checked" : "";
    $alamat_ditampilkan_tidak = (isset($user_setting["alamat_ditampilkan"]) && $user_setting["alamat_ditampilkan"] == "Tidak") ? "checked" : "";
    //ipk ditampilkan
    $ipk_ditampilkan_ya = (isset($user_setting["ipk_ditampilkan"]) && $user_setting["ipk_ditampilkan"]  == "Ya") ? "checked" : "";
    $ipk_ditampilkan_tidak = (isset($user_setting["ipk_ditampilkan"]) && $user_setting["ipk_ditampilkan"]  == "Tidak") ? "checked" : "";
    $action="";
    if(isset($_GET["action"])){
        $action = $_GET["action"];
    }
    switch ($action) {
        case 'settingNotSet':
            echo "<p>Atur setting terlebih dahulu <br></p>";
            break;
    }
    // $action="";
    // if(isset($_GET["action"])){
    //     $action = $_GET["action"];
    //     if($action == "ipk_wrong"){
    //         echo'alert("IPK yang dimasukkan harus berupa integer dan diantara 1.00 dan 4.00")';
    //     }
    // }   
    ?>
    <form action="index.php">
        <button type="submit" name="Back to index.php">Back to index.php</button>
    </form>
    <form action="setting_process.php" method="post">
        <h2>input.php</h2>
        <p>
            <ol>
                <li>
                    <label for="rdoalamat">Alamat Mahasiswa Wajib Diisikan <br></label>
                    <label for="rdoalamat"><input type="radio" name="rdoalamat" id="" value="Ya" <?php echo $alamat_wajib_ya?>>Ya</label>
                    <label for="rdoalamat"><input type="radio" name="rdoalamat" id="" value="Tidak" <?php echo $alamat_wajib_tidak?>>Tidak</label>
                </li>
                <br>
                <li>
                    <label for="txtboxIPK">Nilai Default IPK Mahasiswa <br><input type="text" name="txtboxIPK" id="" <?php echo'value = "'.$default_ipk.'"'?>></label>
                </li>
            </ol>
        </p>
        <h2>display.php</h2>
        <p>
            <ol>
                <li>
                    <label for="txtboxukuran">Ukuran Font: <input type="text" name="txtboxukuran" id="" <?php echo'value = "'.$ukuran_font.'"'?> >px</label>
                </li>
                <li>
                    <label for="selfont">Tampilan Font: 
                        <select name="selfont" id="" >
                            <option value="normal" <?php echo $normal?>>Normal</option>
                            <option value="bold" style="font-weight: bold;" <?php echo $bold?>>Bold</option>
                            <option value="italic" style="font-style: italic;"  <?php echo $italic?>>Italic</option>
                            <option value="underline" style="text-decoration: underline;" <?php echo $underline?>>Underline</option>
                        </select>
                    </label>
                </li>
                <li>
                    <label for="rdoalamatditampilkan">Alamat Mahasiswa Ditampilkan: <br></label>
                    <label for="rdoalamatditampilkan"><input type="radio" name="rdoalamatditampilkan" id="" value="Ya" <?php echo $alamat_ditampilkan_ya?>>Ya</label>
                    <label for="rdoalamatditampilkan"><input type="radio" name="rdoalamatditampilkan" id="" value="Tidak"<?php echo $alamat_ditampilkan_tidak?>>Tidak</label>
                </li>
                <li>
                    <label for="rdoipkditampilkan">IPK Mahasiswa Ditampilkan: <br></label>
                    <label for="rdoipkditampilkan"><input type="radio" name="rdoipkditampilkan" id="" value="Ya" <?php echo $ipk_ditampilkan_ya?>>Ya</label>
                    <label for="rdoipkditampilkan"><input type="radio" name="rdoipkditampilkan" id="" value="Tidak" <?php echo $ipk_ditampilkan_tidak?>>Tidak</label>
                </li>
            </ol>
        </p>
        <p>
            <button type="submit" name="btnsubmitsetting" value="simpan">Simpan</button> <br>
            <button type="submit" name="btnclearcookie" value="clear cookie">Clear Cookie</button>
        </p>
    </form>
</body>
</html>