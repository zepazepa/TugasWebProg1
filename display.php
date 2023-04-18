<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display.php</title>
    <?php
        $setting_user = array();
        if (isset($_COOKIE["user"])){
            //cookie udah ada
            $setting_user = $_COOKIE["user"];
            $ukuran_font = $setting_user["ukuran_font"];
            $tampilan_font = $setting_user["tampilan_font"];
            $alamat_ditampilkan = $setting_user["alamat_ditampilkan"];
            $ipk_ditampilkan = $setting_user["ipk_ditampilkan"];
            echo '<style> li{font-size:'.$ukuran_font.'px;';
            if ($tampilan_font=="bold"){
                echo "font-weight: bold;";
            }
            elseif($tampilan_font == "italic"){
                echo "font-style:italic;";
            }
            elseif($tampilan_font == "underline"){
                echo "text-decoration: underline;";
            }
            else{
                echo "font-style: normal;";
            }
            echo"}</style>";
        }
        else{
            header("location: setting.php?action=settingNotSet");
        }
        
    ?>
</head>
<body>
    <form action="index.php">
        <button type="submit" name="Back to index.php">Back to index.php</button>
    </form>
    <?php
        $data_mahasiswa = array();
        if(isset($_SESSION["data_mahasiswa"])){
            //session udah ada
            $data_mahasiswa = $_SESSION["data_mahasiswa"];
            echo "<p><ol>";
            foreach ($data_mahasiswa as $arr) {
                //data per mahasiswa
                echo "<li><br>";
                foreach ($arr as $key => $value) {
                    //data mahasiswa per key
                    if($key == "Alamat"){
                        if($alamat_ditampilkan == "Ya"){
                            echo "$key : $value <br>";
                        }
                    }
                    elseif($key == "IPK"){
                        if($ipk_ditampilkan == "Ya"){
                            echo "$key : $value <br>";
                        }
                    }
                    else{
                        echo "$key : $value <br>";
                    }
                }
                echo "</li><br>";
            }
            echo "</ol></p>";
        }
        else{
            header("location: input.php?action=dataNull");
        }
    ?>
    <form action="input_process.php" method = "post">
        <button type="submit" value="back" name = "btnbacktoinput">Kembali ke input.php</button><br>
        <button type="submit" value="hapus_session" name = "btnhapussession">Hapus Session</button>
    </form>
</body>
</html>