<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registerM</title>
</head>

<body bgcolor=gray style="margin:auto ;">
    <div class="container">
    <div class="mt-3">
    <h2 class= "text-center">REGISTER MURID</h2>
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">

<form action="registerM.php" method="post">
    <table align="center">
        <tr>
            <th colspan="2" heigt="40"></th>
        </tr>
        <tr>
            <td width="100">Username</td>
            <td><input type="text" class="form-control" name="usernamee" placeholder="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" class="form-control" name="passwordd" placeholder="password"></td>
        </tr>
        <tr> 
            <td>Nama</td>
            <td><input type="text" class="form-control" name="passwordd" placeholder="nama"></td>
        </tr>
        <tr>
            <td><input type="submit" class="btn btn-primary" value="Simpan" name="proses"></td>
        </tr>

    </table>
</form>

<div align="center">
<a class="btn btn-primary" href="loginM.php" role="button">Back</a>

<?php
    if(isset($_POST['proses'])) {
        $id = $_POST['id'];
        $usernamee = $_POST['usernamee'];
        $passwordd = $_POST['passwordd'];
        $nama = $_POST['nama'];
        
        include_once("koneksi.php");
                
        $result = mysqli_query($koneksi, "INSERT INTO user(id,usernamee,passwordd,nama) 
        VALUES('$id','$usernamee','$passwordd','$nama')");
        
        echo "<script>alert('Registrasi berhasil');</script>";
        echo "<meta http-equiv=refresh content=0;URL='loginM.php'>";
    }
?>
