<?php
    if(isset($_POST["btnclearcookie"])){
        setcookie("user[alamat_wajib]","",time()-1);
        setcookie("user[ipk_wajib]","",time()-1);
        setcookie("user[ukuran_font]","",time()-1);
        setcookie("user[tampilan_font]","",time()-1);
        setcookie("user[alamat_ditampilkan]","",time()-1);
        setcookie("user[ipk_ditampilkan]","",time()-1);
        header("location: index.php?action=cookieTerhapus");  
        exit();
    }
    //ambil cookie dari setting.php
    elseif(isset($_POST["btnsubmitsetting"])){
        // if (!(is_int($_POST["txtboxIPK"]))){
        //     header("location: setting.php?action=ipk_wrong");
        //     $ipk = (double)$_POST["txtboxIPK"];
        //     if ($ipk>4 or $ipk<0){
        //         header("location: setting.php?action=ipk_wrong");
        //     }
        // }
        $waktu = mktime(0,0,0,date("m"),date("d")+1,date("y"));
        setcookie("user[alamat_wajib]",$_POST["rdoalamat"],$waktu);
        setcookie("user[ipk_wajib]",$_POST["txtboxIPK"],$waktu);
        setcookie("user[ukuran_font]",$_POST["txtboxukuran"],$waktu);
        setcookie("user[tampilan_font]",$_POST["selfont"],$waktu);
        setcookie("user[alamat_ditampilkan]",$_POST["rdoalamatditampilkan"],$waktu);
        setcookie("user[ipk_ditampilkan]",$_POST["rdoipkditampilkan"],$waktu);
        $setting_user = $_COOKIE["user"];  
        header("location: index.php");  
        exit();
    }
?>