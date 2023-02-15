<body bgcolor=gray style="margin:auto ;">
    <div class="container">
    <div class="mt-3">
    <h2 class= "text-center">REGISTER ADMIN</h2>
<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">

<form action="registerA.php" method="post">
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
            <td>Nama/td>
            <td><input type="text" class="form-control" name="Nama" placeholder="namac"></td>
        </tr>
        <tr>
            <td><input type="submit" class="btn btn-primary" value="Login" name="proses"></td>
        </tr>
    </table>
</form>

<div align="center">
<a class="btn btn-primary" href="loginA.php" role="button">Back</a>

<?php
    if(isset($_POST['proses'])) {
        $id = $_POST['id'];
        $usernamee = $_POST['usernamee'];
        $passwordd = $_POST['passwordd'];
        $nama = $_POST['nama'];
        
        include_once("koneksi.php");
                
        $result = mysqli_query($koneksi, "INSERT INTO aadmin(id,usernamee,passwordd,nama) 
        VALUES('$id','$usernamee','$passwordd','$nama')");
        
        echo "<script>alert('Registrasi berhasil');</script>";
        echo "<meta http-equiv=refresh content=0;URL='loginA.php'>";
    }
?>
