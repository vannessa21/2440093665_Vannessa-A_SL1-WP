
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    nav{
        padding-inline : 15px;
        background-color : #f9ffca;
        display : flex;
        flex-direction : row;
        justify-content : space-between;
    }
    .tombol{
        
        width : 10%;
        align-items : center;
        /* background-color : black; */
        display : flex;
        flex-direction : row;
        justify-content : space-between;
    }

    .tombol a{

        text-decoration : none;
        color : black;
    }
    .tombol a:last-child{
        text-decoration:underline;
    }
    .logout{
        align-items : center;
        display : flex;
        flex-direction : row;
        justify-content : flex-end;
    }

    .logout a{
        text-decoration : none;
        color : black;
    }
    body{
        margin : 0;
        background-color : #cad1ff;
    }
    td{
        width : 100px;
        padding: 20px;
    }
    td:nth-child(even){
        font-weight : bold;
    }
    caption{
        padding-top : 20px;
        font-weight : bold;
    }
</style>
<body>
    <nav>
        <p>Aplikasi Pengelolaan Keuangan</p>
        <div class ="tombol">
            <a href = 'home.php'> Home </a> 
            <a href = 'profile.php'> Profile</a>
        </div>
            
        <div class = "logout">
            <a href = 'welcome.php'> Logout </a> 
        </div>
    </nav>
    <main>
    <table>
            <caption>Profil Pribadi</caption>
                <tr>
                    <td>Nama Depan</td>
                    <?php
                        echo "<td>".$_SESSION['NamaDepan']."</td>";
                    ?>
                    

                    <td>Nama Tengah</td>
                    <?php
                        echo "<td>".$_SESSION['NamaTengah']."</td>";
                    ?>

                    <td>Nama Belakang</td>
                    <?php
                        echo "<td>".$_SESSION['NamaBelakang']."</td>";
                    ?>
                </tr>
                
                
                <tr>
                    <td>Tempat Lahir</td>
                    <?php
                        echo "<td>".$_SESSION['TempatLahir']."</td>";
                    ?>
                
                    <td>Tgl Lahir</td>
                    <?php
                        echo "<td>".$_SESSION['TglLahir']."</td>";
                    ?>

                    <td>NIK</td>
                    <?php
                        echo "<td>".$_SESSION['NIK']."</td>";
                    ?>
                </tr>
            
                <tr>
                    <td>Warga Negara</td>
                    <?php
                        echo "<td>".$_SESSION['WargaNegara']."</td>";
                    ?>
                
                    <td>Email</td>
                    <?php
                        echo "<td>".$_SESSION['Email']."</td>";
                    ?>
                    <td>No HP</td>
                    <?php
                        echo "<td>".$_SESSION['NoHP']."</td>";
                    ?>
                </tr>   

                <tr>
                    <td>Alamat</td>
                    <?php
                        echo "<td>".$_SESSION['Alamat']."</td>";
                    ?>
                
                    <td>Kode Pos</td>
                    <?php
                        echo "<td>".$_SESSION['KodePos']."</td>";
                    ?>

                    <td>Foto Profil</td>

                   <td>
                       <img src="<?php echo $_SESSION['FotoProfil'];?>" alt="" srcset="" width = "50px" height = "50px">
                   </td>
                                
                </tr>

        </table>
    </main>
   

</body>
</html>