<!DOCTYPE html>
<html>
    <head>
        <title>Registrasi Item-U</title>
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            
    </head> 
    <body>
        <div class="login">
            <img src ="../img/LOGO.jpg" class="logo">
                <h1>Registrasi</h1>
                <form action="API_Registrasi.php" method="POST">
                    <p>Username</p>
                    <input type = "text" name="username" placeholder="Masukkan username">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Masukkan Password">
                    <input type="submit" name="" value="Daftar">
                    <a href="Login_Page.php">kembali ke halaman login</a><br>
                </form>
        </div>
    </body>    
</html>