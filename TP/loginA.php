<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logina</title>
</head>

<body bgcolor=white style="margin:auto ;">
<div class="container">
    <div class="mt-3">
    <h2 class= "text-center">LOGIN ADMIN</h2>
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">

<?php
session_start();
include "koneksi.php";
?>

<form action="" method="POST">
<table align="center" >
    <tr>
        <th colspan="2" heigt="40"></th>
    </tr>
    <tr>
        <td width="100">Username</td>
        <td><input type="usernamee" class="form-control" name="usernamee" placeholder="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" class="form-control" name="passwordd" placeholder="password"></td>
    </tr>
    <tr>    
        <td><input type="submit" class="btn btn-primary" value="Login" name="proseslog"></td>
    </tr>
</table>
</form>

   <div align="center">
      <a class="btn btn-primary" href="registerA.php" role="button">Register</a><br>

   <div class="mt-3">
      <h5>LOG IN SEBAGAI ?</h5>
   </div>

<div class="mt-3">
<div class="btn-group" role="group" aria-label="Basic example">

   <div class='d-grid gap-2 col-6 mx-auto'>
   <a class="btn btn-primary" href="loginA.php" role="button">Admin</a>
   </div>

   <div class='d-grid gap-2 col-6 mx-auto'>
   <a class="btn btn-primary" href="loginM.php" role="button">Murid</a>
   </div>

<?php
if(isset($_POST['proseslog'])){
    $sql = mysqli_query($koneksi, "select * from aadmin where 
    usernamee ='$_POST[usernamee]'
    and passwordd = '$_POST[passwordd]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION['usernamee'] = $_POST['usernamee'];
        echo "<script>alert('Selamat log in berhasil');</script>";
        echo "<meta http-equiv=refresh content=0;URL='admin/index.php'>";
    }else{
        echo "<script>alert('Masukan Username Dan Password Yang Tepat');</script>";
        echo "<meta http-equiv=refresh content=2;URL='loginA.php'>";
    }
}
?>