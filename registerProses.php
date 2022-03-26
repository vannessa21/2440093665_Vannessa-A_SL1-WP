<?php
    session_start();
    // print_r($_POST['submit']);
    $NamaDepan = $_POST ['NamaDepan'];
    $NamaTengah = $_POST ['NamaTengah'];
    $NamaBelakang = $_POST ['NamaBelakang'];
    $TempatLahir = $_POST ['TempatLahir'];
    $TglLahir = $_POST ['TglLahir'];
    $NIK = $_POST ['NIK'];
    $WargaNegara = $_POST ['WargaNegara'];
    $Email = $_POST ['Email'];
    $NoHP = $_POST ['NoHP'];
    $Alamat = $_POST ['Alamat'];
    $KodePos = $_POST ['KodePos'];
    $fileName = $_FILES ['berkas']['name'];
    $tempName = $_FILES ['berkas']['tmp_name'];
    $username = $_POST ['Username'];
    $password1 = $_POST['Password1'];
    $password2= $_POST['Password2'];

    if (!empty($NamaDepan) && !empty($NamaTengah)&& !empty($NamaBelakang)&& !empty($TempatLahir)&& !empty($TglLahir)&& !empty($NIK)&& !empty($WargaNegara)&& !empty($Email)&& !empty($NoHP)&& !empty($Alamat) && !empty($KodePos)&& !empty($fileName)&& !empty($username)&& !empty($password1)&& !empty($password2)){

        $dirTujuan = "terupload/";
        $upload = move_uploaded_file ($tempName, $dirTujuan.$fileName);
        
        $_SESSION['NamaDepan'] = $NamaDepan;
        $_SESSION['NamaTengah'] = $NamaTengah;
        $_SESSION['NamaBelakang'] = $NamaBelakang;
        $_SESSION['TempatLahir'] = $TempatLahir;
        $_SESSION['TglLahir'] = $TglLahir;
        $_SESSION['NIK'] = $NIK;
        $_SESSION['Alamat'] = $Alamat;
        $_SESSION['WargaNegara'] = $WargaNegara;
        $_SESSION['Email'] = $Email;
        $_SESSION['NoHP'] = $NoHP;
        $_SESSION['KodePos'] = $KodePos;
        $_SESSION['FotoProfil'] = $dirTujuan.$fileName;
        $_SESSION['username']=$username;
        $_SESSION['password1']=$password1;
        $_SESSION['password2']=$password2;

        header("location:login.php");
    }
    else {
        echo "Mohon isi semua data dengan benar!<br>";
        
        echo "<a href='register.php'>Kembali</a>";
    }
?>
