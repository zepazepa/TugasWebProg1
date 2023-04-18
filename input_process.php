<?php
    session_start();
    $data_mahasiswa = array();
    if(isset($_POST["btnsimpaninput"])){
        $nrp = $_POST["txtboxNRP"];
        $nama = $_POST["txtboxNama"];
        $alamat = $_POST["txtareaAlamat"];
        $ipk = $_POST["txtboxIPK"];
        $data = array(
            "NRP" => $nrp,
            "Nama" => $nama,
            "Alamat" => $alamat,
            "IPK" => $ipk
        );
        if (isset($_SESSION["data_mahasiswa"])){
            $data_mahasiswa = $_SESSION["data_mahasiswa"];
            $data_mahasiswa[]=$data;
            $_SESSION["data_mahasiswa"] = $data_mahasiswa;
        }
        else{
            $_SESSION["data_mahasiswa"] = array($data);    
        }

        header("location: display.php");
        exit();
    }
    if(isset($_POST["btnhapussession"])){
        session_destroy();
        header("location: index.php");
        exit();
    }
    elseif(isset($_POST["btnbacktoinput"])){
        header("location: input.php");
        exit();
    }
?>